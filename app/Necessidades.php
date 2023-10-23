<?php

namespace App;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Necessidades extends Model
{
    protected $table = 'necessidades';

    protected $fillable = [
        'possui_laudo', 'laudo', 'data_laudo', 'CID'
    ];
}
