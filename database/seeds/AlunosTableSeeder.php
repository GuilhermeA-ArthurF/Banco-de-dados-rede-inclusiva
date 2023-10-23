<?php

<<<<<<< Updated upstream
use Illuminate\Database\Seeder;
=======
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
>>>>>>> Stashed changes

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
<<<<<<< Updated upstream
            'Nome' => 'Travel',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('alunos')->insert([
            'Nome' => 'Food',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('alunos')->insert([
            'Nome' => 'Home',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('alunos')->insert([
            'Nome' => 'Fashion',
            'created_at' => now(),
            'updated_at' => now()
        ]);

        DB::table('alunos')->insert([
            'name' => 'Health',
            'created_at' => now(),
            'updated_at' => now()
        ]);
=======
            'Nome' => 'João',
            'Sobrenome' => 'Silva',
            'Idade' => 18,
            'Sexo' => 'M', 
            'Data_do_cadastro' => now(), 
            'final_do_cadastro' => null, 
            'periodo_aluno' => 'Manhã',
            'turma' => 'A',
        ]);

>>>>>>> Stashed changes
    }
}
