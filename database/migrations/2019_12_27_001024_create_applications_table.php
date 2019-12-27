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
            $table->unsignedInteger('member_id');
            $table->unsignedInteger('staff_id');
            $table->unsignedInteger('shelter_id');
            $table->unsignedInteger('application_id');
            $table->string('kind');
            $table->string('variety');
            $table->string('gender');
            $table->string('age');
            $table->string('size');
            $table->string('adoptionstatus_date');
            $table->boolean('track_date');
            $table->boolean('track_description');
            $table->string('housing_date');
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
