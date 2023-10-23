<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Professores extends Model
{
    protected $table='professores';

    protected $fillable=[
        'nome', 'idade'
    ];
}
