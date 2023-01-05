<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHotelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_image');
            $table->string('hotel_title');
            $table->string('hotel_location');
            $table->string('hotel_rating');
            $table->string('hotel_description');
            $table->string('hotel_singlebed');
            $table->string('hotel_doublebed');
            $table->string('hotel_singlebed_price');
            $table->string('hotel_doublebed_price');
            $table->string('hotel_payment');
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
        Schema::dropIfExists('hotels');
    }
}
