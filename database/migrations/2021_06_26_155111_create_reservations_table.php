<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('seat_id')->unsigned();
            $table->integer('line_id')->unsigned();
            $table->integer('start')->unsigned();
            $table->integer('end')->unsigned();
            $table->integer('ticket_id')->unsigned()->nullable();
            $table->integer('available')->default(0);
            $table->timestamps();
            $table->foreign('seat_id')->references('id')->on('seats');
            $table->foreign('line_id')->references('id')->on('lines');
            $table->foreign('start')->references('id')->on('stations');
            $table->foreign('end')->references('id')->on('stations');
            $table->foreign('ticket_id')->references('id')->on('tickets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservations');
    }
}
