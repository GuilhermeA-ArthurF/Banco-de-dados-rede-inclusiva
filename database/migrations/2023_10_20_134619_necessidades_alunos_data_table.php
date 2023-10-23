<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class NecessidadesAlunosDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("necessidades", function (Blueprint $table) {
            $table->id('idnecessidades');
            $table->boolean('possui_lado');
            $table->binary('laudo');
            $table->dateTime('data_laudo');
            $table->string('CID');
            
        });
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
