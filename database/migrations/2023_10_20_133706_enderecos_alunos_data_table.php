<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class EnderecosAlunosDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create("enderecos", function (Blueprint $table) {
            $table->increments("IDenderecos");
            $table->string("CEP")->notNullable();
            $table->string("rua")->notNullable();
            $table->string("cidade")->notNullable();
            
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
