<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTableColumnTree extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('columnTree', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('URL');

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
        Schema::drop('columnTree');
    }
}
