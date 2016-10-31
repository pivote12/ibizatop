<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Profile extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profile', function (Blueprint $table) {
            $table->increments('id');
            $table->string('is_active');
            $table->string('is_spanish');
            $table->string('name');
            $table->string('description');
            $table->string('age');
            $table->string('phone');
            $table->string('height');
            $table->string('measurements');
            $table->string('deluxe_escort');
            $table->string('featured_escort');
            $table->string('category');
            $table->string('price');
            $table->string('nationality');
            $table->string('languages');
            $table->string('sexual_orientation');
            $table->string('departures');
            $table->string('code');
            $table->string('timetable');

            $table->string('key_words');
            $table->string('description_metatags');
            $table->string('title_metatags');
            
            $table->string('zona');

            $table->integer('id_agency')->unsigned();
            $table->foreign('id_agency')->references('id')->on('agencies');

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
        Schema::drop('profile');
    }
}
