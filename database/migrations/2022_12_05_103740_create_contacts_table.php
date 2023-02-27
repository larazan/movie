<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            // $table->bigInteger('id');
            $table->string('name')->nullable();
            $table->string('email')->nullable();
            $table->string('mobile_number');
            $table->string('subject');
            $table->text('message');
            $table->tinyInteger('seen')->default(0);
            $table->string('feedback')->default('0');
            $table->longText('reply');
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
        Schema::dropIfExists('contacts');
    }
}
