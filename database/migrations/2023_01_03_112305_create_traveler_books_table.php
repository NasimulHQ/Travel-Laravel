<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTravelerBooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('traveler_books', function (Blueprint $table) {
            $table->id();
            $table->string('tr_name');
            $table->string('tr_seat');
            $table->string('tr_passportnum');
            $table->string('tr_date_of_birth');
            $table->string('tr_expiry_date');
            $table->string('tr_city');
            $table->string('tr_country');
            $table->string('tr_email');
            $table->string('tr_phone');
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
        Schema::dropIfExists('traveler_books');
    }
}
