<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientbooksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientbooks', function (Blueprint $table) {
            $table->id();
            $table->string('client_no');
            $table->string('cl_name');
            $table->string('cl_bed');
            $table->string('cl_nid');
            $table->string('cl_date_of_birth');
            $table->string('cl_city');
            $table->string('cl_country');
            $table->string('cl_email');
            $table->string('cl_phone');
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
        Schema::dropIfExists('clientbooks');
    }
}
