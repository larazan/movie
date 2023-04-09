<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('albums', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name');
            $table->integer('person_id')->nullable();
            $table->integer('group_id')->nullable();
            $table->string('slug');
            $table->string('rand_id');
            $table->string('year')->nullable();
            $table->string('description');
            $table->string('original');
            $table->string('medium');
            $table->string('small');
            $table->string('status');
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
        Schema::dropIfExists('albums');
    }
};
