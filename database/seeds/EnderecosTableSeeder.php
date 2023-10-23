<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EnderecosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('enderecos')->insert([
            'CEP' => '32230-000',
            'rua' => 'Av loucura games',
            'cidade' => 'Ibirité',
        ]);
    }
}
