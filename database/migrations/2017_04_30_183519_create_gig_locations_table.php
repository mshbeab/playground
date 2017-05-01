<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGigLocationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('locations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('city');
            $table->string('country');
            $table->string('street');
            $table->string('zip');
            $table->timestamps();
        });

        Schema::create('gig_location', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('gig_id')->unsigned();
            $table->integer('location_id')->unsigned();
            //Foreign Keys
            $table->foreign('gig_id')->references('id')->on('gigs');
            $table->foreign('location_id')->references('id')->on('locations');
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
        Schema::dropIfExists('gig_location');
        Schema::dropIfExists('locations');
    }
}
