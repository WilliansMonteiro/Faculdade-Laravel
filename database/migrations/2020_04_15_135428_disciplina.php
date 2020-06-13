<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Disciplina extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('disciplinas', function(Blueprint $table){
          $table->bigIncrements('id');
          $table->unsignedBigInteger('professor_id');
          $table->string('nome');
          $table->string('carga');
          $table->timestamps();
          $table->foreign('professor_id')->references('id')->on('professor');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('disciplinas');
    }
}
