<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class NecessidadesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('necessidades') -> insert ([
            'possui_laudo'=> '1',
            'laudo'=> '0x',
            'data_laudo' => now(),
            'CID' => 'ABCDEFGHI'
        ]);
    }
}
