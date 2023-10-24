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
            
            $table->unsignedInteger('IDenderecos');
            $table->foreign('IDenderecos')->references('IDenderecos')->on('enderecos');

            
            $table->unsignedInteger('IDcontatos');
            $table->foreign('IDcontatos')->references('IDcontatos')->on('contato');
            
            $table->unsignedInteger('IDnecessidades');
            $table->foreign('IDnecessidades')->references('IDnecessidades')->on('necessidades');

            $table->unsignedInteger('IDescolas');
            $table->foreign('IDescolas')->references('IDescolas')->on('escolas');

            $table->unsignedInteger('IDprofessores');
            $table->foreign('IDprofessores')->references('IDprofessores')->on('professores');
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
