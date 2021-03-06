<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlunoDisciplina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('aluno_disciplina', function(Blueprint $table){

            $table->unsignedBigInteger('aluno_id');
            $table->unsignedBigInteger('disciplina_id');
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
        Schema::dropIfExists('aluno_disciplina');
    }
}
