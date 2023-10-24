<?php

use App\Models\Alunos;
use Database\Seeders\AlunosTableSeeder;
use Database\Seeders\EscolasTableSeeder;
use Database\Seeders\ProfessoresTableSeeder;
use Database\Seeders\ContatosTableSeeder;
use Database\Seeders\EnderecosTableSeeder;
use Database\Seeders\NecessidadesTableSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS=0');

        DB::table('roles')->truncate();
        DB::table('users')->truncate();
        
        DB::table('alunos')->truncate();
        DB::table('escolas')->truncate();
        DB::table('necessidades')->truncate();
        DB::table('contatos')->truncate();
        DB::table('professores')->truncate();

        $this->call([RolesTableSeeder::class, UsersTableSeeder::class]);
        $this->call([EscolasTableSeeder::class ,ProfessoresTableSeeder::class, ContatosTableSeeder::class,
        NecessidadesTableSeeder::class,  EnderecosTableSeeder::class]);
        $this->call([AlunosTableSeeder::class]);
        
        DB::statement('SET FOREIGN_KEY_CHECKS=1');
    }
}
