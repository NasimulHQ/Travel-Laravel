<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFlightsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('flights', function (Blueprint $table) {
            $table->id();
            $table->string('airline_image');
            $table->string('airline_title');
            $table->string('airline_form');
            $table->string('airline_destination');
            $table->string('airline_date');
            $table->string('airline_departure_time');
            $table->string('airline_arrival_time');
            $table->string('airline_economy_seat');
            $table->string('airline_business_seat');
            $table->string('airline_economy_price');
            $table->string('airline_business_price');
            $table->string('airline_payment');
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
        Schema::dropIfExists('flights');
    }
}
