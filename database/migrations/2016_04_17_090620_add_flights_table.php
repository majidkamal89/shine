<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->increments('id');
            $table->string('flight_name', 45);
            $table->integer('num_of_passengers');
            $table->integer('country_id')->unsigned();
            $table->foreign('country_id')->references('id')->on('country')->onDelete('cascade')->onUpdate('cascade');
            $table->timestamps();
            $table->timestamp('deleted_at')->nullable();
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
        Schema::drop('flights');
    }
}
