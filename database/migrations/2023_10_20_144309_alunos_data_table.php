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
            $table->id('IDAlunos');
            $table->string('Nome')->notNullable()->index();
            $table->string('Sobrenome')->notNullable();
            $table->integer('Idade')->notNullable()->index();;
            $table->char('Sexo', 1)->notNullable();
            $table->dateTime('Data_do_cadastro');
            $table->dateTime('final_do_cadastro');
            $table->string('periodo_aluno');
            $table->string('turma')->index();;
            
            $table->unsignedInteger('idenderecos')->index();
            $table->foreign('idenderecos')->references('idenderecos')->on('enderecos');

            
            $table->unsignedInteger('idcontato')->index();
            $table->foreign('idcontato')->references('idcontato')->on('contato');
            
            $table->unsignedInteger('idnecessidades')->index();
            $table->foreign('idnecessidades')->references('idnecessidades')->on('necessidades');

            $table->unsignedInteger('idescolas')->index();
            $table->foreign('idescolas')->references('idescolas')->on('escolas');

            $table->unsignedInteger('idprofessor')->index();;
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
