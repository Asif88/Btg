<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateCategoryPlaceTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('category_place', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cat_id')->unsigned()->default(0);
            $table->foreign('cat_id')->references('id')->on('categories')->onDelete('cascade');
            $table->integer('place_id')->unsigned()->default(0);
            $table->foreign('place_id')->references('id')->on('places')->onDelete('cascade');          
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('category_place');
    }
}
