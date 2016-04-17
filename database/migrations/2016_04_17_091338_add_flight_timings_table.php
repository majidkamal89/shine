<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFlightTimingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flight_timings', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('flight_id')->unsigned();
            $table->foreign('flight_id')->references('id')->on('flights')->onDelete('cascade')->onUpdate('cascade');
			$table->timestamp('fight_date')->nullable();
            $table->tinyInteger('status')->default(0)->nullable()->comment = "0=active, 1=in-active";
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('flight_timings');
    }
}
