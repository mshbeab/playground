<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGigImagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gig_images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('src');
            $table->string('title');
            $table->string('priority');
            $table->integer('gig_id')->unsigned();
            $table->foreign('gig_id')->references('id')->on('gigs');
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
        Schema::dropIfExists('gig_images');
    }
}
