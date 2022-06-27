<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->id();
            $table->integer('user_id');
            $table->string('job_title');
            $table->longText('job_description');
            $table->enum('job_nature', array('part time', 'full time'));
            $table->string('job_length');
            $table->enum('job_type', array('hourly', 'contract basis'));
            $table->integer('skill_level_id');
            $table->string('job_privacy');
            $table->boolean('has_budget');
            $table->float('min_hourly_rate');
            $table->float('max_hourly_rate');
            $table->float('budget');
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
        Schema::dropIfExists('jobs');
    }
}
