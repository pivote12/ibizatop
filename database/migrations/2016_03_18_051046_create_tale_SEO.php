<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTaleSEO extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('SEO', function (Blueprint $table) {
            $table->increments('id');
            $table->string('siteDescription');
            $table->string('keywords');

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
        Schema::drop('SEO');
    }
}
