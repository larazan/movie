<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChattingsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chattings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('user_id');
            $table->text('message');
            $table->tinyInteger('sent_by_user')->default(0);
            $table->tinyInteger('sent_by_admin')->default(0);
            $table->tinyInteger('seen_by_user')->default(1);
            $table->tinyInteger('seen_by_admin')->default(1);
            $table->tinyInteger('status')->default(1);
            $table->bigInteger('shop_id')->nullable();
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
        Schema::dropIfExists('chattings');
    }
}
