<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enderecos extends Model
{
    protected $table = 'enderecos';
    
    protected $fillable = [
        'CEP', 'rua', 'cidade'
    ];
}
