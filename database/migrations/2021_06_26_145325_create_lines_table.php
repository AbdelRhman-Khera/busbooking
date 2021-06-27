<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLinesTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lines', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('start')->unsigned();
            $table->integer('end')->unsigned();
            $table->timestamps();
            $table->foreign('start')->references('id')->on('stations');
            $table->foreign('end')->references('id')->on('stations');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lines');
    }
}
