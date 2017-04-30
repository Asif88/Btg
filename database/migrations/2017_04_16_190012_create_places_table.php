<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePlacesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('places', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->string('title');
            $table->string('facebook');
            $table->string('twitter');
            $table->string('g_plus');
            $table->string('email');            
            $table->string('street');
            $table->string('city');
            $table->string('postal_code');
            $table->string('country');            
            $table->string('fax');
            $table->string('phone_number');
            $table->string('description');
            $table->string('coordinates');            
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
        Schema::dropIfExists('places');
    }
}
