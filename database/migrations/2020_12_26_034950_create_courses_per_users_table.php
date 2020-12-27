<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesPerUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses_per_users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Cod_User');
            $table->unsignedBigInteger('Cod_Course');
            $table->BigInteger('Cod_Lesson');
            $table->float('Score')->nullable();
            $table->timestamps();
            $table->foreign('Cod_User')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('Cod_Course')->references('id')->on('courses')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('courses_per_users');
    }
}
