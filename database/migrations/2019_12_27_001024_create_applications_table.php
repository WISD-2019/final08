<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateApplicationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('application', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('staff_id');
            $table->unsignedInteger('member_id');
            $table->unsignedInteger('animal_id');
            $table->string('reason');
            $table->string('environment');
            $table->string('pose_date');
            $table->string('evluation_date');
            $table->string('evluation_opinion');
            $table->string('review_date');
            $table->boolean('pass');
            $table->string('pass_opinion');
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
        Schema::dropIfExists('application');
    }
}
