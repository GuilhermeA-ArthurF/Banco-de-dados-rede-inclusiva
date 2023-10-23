<?php

use Illuminate\Database\Seeder;

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
    }
}
