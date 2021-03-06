<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvQuestionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ev_questions', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Cod_Curso');
            $table->string('Question', 120);
            $table->integer('Answer')->unsigned();
            $table->foreign('Cod_Curso')->references('id')->on('courses')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ev_questions');
    }
}
