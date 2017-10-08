<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleriesTable extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::create('galleries', function (Blueprint $table) {
            $table->increments('gallery_id');
            $table->integer('match_id')->unsigned();
            $table->integer('user_id')->unsigned();
            $table->string('gallery_name')->nullable();
            
            $table->timestamps();
            $table->foreign('match_id')->references('match_id')->on('matches')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('galleries');
    }
}