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
        Schema::table('seasons', function (Blueprint $table) {
            //
            $table->string('slug');
            $table->string('original');
            $table->string('medium');
            $table->string('small');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('seasons', function (Blueprint $table) {
            //
            $table->dropColumn('slug');
            $table->dropColumn('original');
            $table->dropColumn('medium');
            $table->dropColumn('small');
        });
    }
};
