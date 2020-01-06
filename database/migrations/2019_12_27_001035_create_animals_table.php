<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAnimalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('animals', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('member_id');
            $table->unsignedInteger('staff_id');
            $table->unsignedInteger('shelter_id');
            $table->unsignedInteger('applciation_id');
            $table->string('kind');
            $table->string('variety');
            $table->string('gender');
            $table->string('age');
            $table->string('size');
            $table->string('adoptionstatus_date');
            $table->string('track_date');
            $table->string('track_description');
            $table->string('housin_date');
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
        Schema::dropIfExists('animal');
    }
}
