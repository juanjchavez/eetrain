<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Cod_Course');
            $table->unsignedBigInteger('Cod_User');
            $table->string('Lesson_Name', 150);
            $table->text('Description')->nullable();
            $table->string('Unit', 60);
            $table->integer('Order')->unsigned();
            $table->string('Duration', 50);
            $table->string('Url', 255)->nullable();
            $table->timestamps();

            $table->foreign('Cod_Course')->references('id')->on('courses')->onDelete('cascade');
            $table->foreign('Cod_User')->references('id')->on('users')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
