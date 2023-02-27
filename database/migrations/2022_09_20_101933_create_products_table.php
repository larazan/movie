<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('products', function (Blueprint $table) {
            $table->bigIncrements('id');
            // $table->uuid('uuid')->unique();
            $table->string('rand_id');
            $table->string('code',191)->nullable();
            $table->unsignedBigInteger('parent_id')->nullable();
            $table->unsignedBigInteger('user_id');
            $table->string('sku');
            $table->string('type');
            $table->string('name');
            $table->string('slug');
            $table->string('attributes')->nullable();
            $table->longText('images');
            $table->string('thumbnail');
            $table->tinyInteger('published')->default(0);
            $table->string('discount_type')->nullable();
            $table->integer('current_stock')->nullable();
            $table->tinyInteger('featured_status')->default(1);
            $table->string('meta_title')->nullable();
            $table->string('meta_description')->nullable();
            $table->string('meta_image')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->decimal('discount', 15, 2)->nullable();
            $table->decimal('weight', 10, 2)->nullable();
            $table->decimal('width', 10, 2)->nullable();
            $table->decimal('height', 10, 2)->nullable();
            $table->decimal('length', 10, 2)->nullable();
            $table->text('details')->nullable();
            $table->tinyInteger('status')->default(1);
            $table->timestamps();
            $table->softDeletes();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('parent_id')->references('id')->on('products');
        });
    }
    
    
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('products');
    }
}
