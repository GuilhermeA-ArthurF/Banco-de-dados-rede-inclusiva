<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlunosDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alunos', function (Blueprint $table) {
            $table->increments('IDAlunos');
            $table->string('Nome')->notNullable();
            $table->string('Sobrenome')->notNullable();
            $table->integer('Idade')->notNullable();
            $table->char('Sexo', 1)->notNullable();
            $table->dateTime('Data_do_cadastro');
            $table->dateTime('final_do_cadastro');
            $table->string('periodo_aluno');
            $table->string('turma');
            
            $table->unsignedInteger('idenderecos');
            $table->foreign('idenderecos')->references('idenderecos')->on('enderecos');

            
            $table->unsignedInteger('idcontato');
            $table->foreign('idcontato')->references('idcontato')->on('contato');
            
            $table->unsignedInteger('idnecessidades');
            $table->foreign('idnecessidades')->references('idnecessidades')->on('necessidades');

            $table->unsignedInteger('idescolas');
            $table->foreign('idescolas')->references('idescolas')->on('escolas');

            $table->unsignedInteger('idprofessor');
            $table->foreign('idprofessor')->references('idprofessor')->on('professor');
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
