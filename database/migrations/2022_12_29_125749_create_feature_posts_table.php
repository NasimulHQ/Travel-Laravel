<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeaturePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('feature_posts', function (Blueprint $table) {
            $table->id();
            $table->string('featpost_image');
            $table->string('featpost_title');
            $table->string('featpost_heading');
            $table->string('featpost_description');
            $table->string('featpost_date');
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
        Schema::dropIfExists('feature_posts');
    }
}
