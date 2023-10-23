<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escolas extends Model
{
    protected $table = 'escolas';
    
    protected $fillable = [
        'CEP', 'nome', 'rua', 'bairro'
    ];
}
