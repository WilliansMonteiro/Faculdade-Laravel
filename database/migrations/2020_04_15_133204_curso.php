<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Curso extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cursos', function(Blueprint $table){
            $table->bigIncrements('id');
            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('disciplina_id');
            $table->string('nome');
            $table->string('duracao');
            $table->string('especialidade');
            $table->timestamps();
            $table->foreign('aluno_id')->references('id')->on('aluno');
            $table->foreign('disciplina_id')->references('id')->on('disciplina');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('cursos');
    }
}
