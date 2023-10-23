<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EscolasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('escolas')->insert([
            'cep'=>'32672114',
            'nome'=>'Petrovale',
            'rua'=>'Montenegro',
            'bairro'=>'Petrovale'
        ]);
    }
}
