<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMusicsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('musics', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained('users');
            $table->string('title');
            $table->string('slug');
            $table->string('rand_id');
            $table->integer('person_id')->nullable();
            $table->integer('album_id')->nullable();
            $table->string('description');
            $table->smallInteger('type')->default('1');
            $table->string('original');
            $table->string('medium');
            $table->string('small');
            $table->string('audio');
            $table->integer('duration');
            $table->integer('country');
            $table->string('status');
            $table->timestamps();
            $table->softDeletes();

            // $table->foreign('person_id')->references('id')->on('persons')->onDelete('cascade');
            // $table->foreign('album_id')->references('id')->on('albums')->onDelete('cascade');
            // $table->foreign('group_id')->references('id')->on('groups')->onDelete('cascade');
        });
    }
   
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('musics');
    }
}
