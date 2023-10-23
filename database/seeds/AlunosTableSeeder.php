<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AlunosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('alunos')->insert([
            'Nome' => 'João',
            'Sobrenome' => 'Silva',
            'Idade' => 18,
            'Sexo' => 'M', 
            'Data_do_cadastro' => now(), 
            'final_do_cadastro' => null, 
            'periodo_aluno' => 'Manhã',
            'turma' => 'A',
        ]);

    }
}
