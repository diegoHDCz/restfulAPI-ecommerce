<?php

namespace App\Exceptions;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

trait ExceptionTrait
{
    public function apiException($request, $e)
    {
        if ($this->isModel($e)) {
            return response()->json([
                'errors' => 'Produtos não encontrado'
            ], Response::HTTP_NOT_FOUND);
        }


        if ($this->isHttp($e)) {
            return response()->json([
                'errors' => 'Endereço incorrreto'
            ]);
        }
    }
    public function isModel($e)
    {
        return $e instanceof ModelNotFoundException;
    }

    public function isHttp($e)
    {
        return $e instanceof NotFoundHttpException;
    }
}
