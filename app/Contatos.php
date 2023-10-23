<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contatos extends Model
{
    protected $table = 'contatos';

    protected $fillable = [
        'contato',
    ];
}
