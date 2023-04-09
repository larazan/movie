<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('persons', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('rand_id');
            $table->integer('gender_id');
            $table->text('bio');
            $table->date('birth_date');
            $table->string('birth_location');
            $table->string('nationality');
            $table->string('facebook');
            $table->string('instagram');
            $table->string('twitter');
            
            $table->timestamps();
            $table->softDeletes();
        });
    }
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('persons');
    }
}
