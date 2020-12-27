<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEvOptionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ev_options', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('Cod_Question');
            $table->string('Content', 120);
            $table->timestamps();
            $table->foreign('Cod_Question')->references('id')->on('ev_questions')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ev_options');
    }
}
