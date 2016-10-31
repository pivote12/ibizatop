<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImagenTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('image_profile', function (Blueprint $table) {
            $table->increments('id');

            $table->string('url1');
            $table->string('url2');
            $table->string('url3');
            $table->string('url4');
            $table->string('url5');

            $table->string('check_photos');

            $table->integer('profile_id')->unsigned();
            $table->foreign('profile_id')->references('id')->on('profile');

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
        Schema::drop('image_profile');
    }
}
