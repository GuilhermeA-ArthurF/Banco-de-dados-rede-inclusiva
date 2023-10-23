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
            'final_do_cadastro' => '2023-10-23 14:30:00', 
            'periodo_aluno' => 'Manhã',
            'turma' => 'A',
            'IDenderecos'=> 1,
            'IDnecessidades'=> 1,
            'IDcontatos'=> 1,            
            'IDprofessores'=>1,
            'IDescolas'=>1
        ]);
    }
}
