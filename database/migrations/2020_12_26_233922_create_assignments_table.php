<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAssignmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('assignments', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Cod_User');
            $table->unsignedBigInteger('Cod_Lesson');
            $table->string('Url', 255);
            $table->float('Score');
            $table->timestamps();
            $table->foreign('Cod_User')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('Cod_Lesson')->references('id')->on('lessons')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('assignments');
    }
}
