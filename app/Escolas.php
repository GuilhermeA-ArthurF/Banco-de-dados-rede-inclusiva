<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escolas extends Model
{
    protected $table = 'escolas';
    public $timestamps = false;

    protected $fillable = [
        'cep', 'nome', 'rua', 'bairro'
    ];
}
