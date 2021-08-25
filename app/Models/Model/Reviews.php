<?php

namespace App\Models\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reviews extends Model
{

    use HasFactory;

    protected $fillable = [
        'star','customer','review'
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
