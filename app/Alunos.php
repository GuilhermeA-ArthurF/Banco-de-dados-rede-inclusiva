<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Alunos extends Model
{
    protected $table = 'alunos'; 

    protected $fillable = [
        'Nome', 'Sobrenome', 'Idade', 'Sexo', 'Data_do_cadastro', 'final_do_cadastro', 'periodo_aluno', 'turma'
    ];
}