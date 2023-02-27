<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMoviesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('movies', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('category_movie_id');
            $table->string('title');
            $table->string('rand_id');
            $table->string('slug');
            $table->date('release_date');
            $table->text('description');
            $table->integer('year');
            $table->integer('country');
            $table->integer('duration');
            $table->string('lang');
            $table->text('network');
            $table->text('genre');
            $table->bigInteger('visits')->default(1);
            $table->string('original');
            $table->string('large');
            $table->string('medium');
            $table->string('small');
            $table->string('status');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('category_movie_id')->references('id')->on('category_movies')->onDelete('cascade');
        });
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('movies');
    }
}
