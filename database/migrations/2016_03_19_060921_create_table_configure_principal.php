<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableConfigurePrincipal extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('principal', function(Blueprint $table) {
            $table->increments('id');
            $table->string('topText');
            $table->string('email');
            $table->string('phone');
            $table->string('featuredDescription');
            $table->string('novelties');
            $table->string('bannersDescription');

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
        Schema::drop('principal');
    }
}

