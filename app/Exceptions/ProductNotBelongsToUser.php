<?php

namespace App\Exceptions;

use Exception;

class ProductNotBelongsToUser extends Exception
{
    public function render()
    {
        return ['errors'=> 'Usuário não autorizado a fazer esta operação'];
    }
}
