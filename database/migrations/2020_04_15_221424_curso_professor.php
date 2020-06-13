<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CursoProfessor extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('curso_professor', function(Blueprint $table){
        $table->unsignedBigInteger('curso_id');
        $table->unsignedBigInteger('professor_id');
        $table->foreign('curso_id')->references('id')->on('curso');
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
        Schema::dropIfExists('curso_professor');
    }
}
