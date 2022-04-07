<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('product', function (Blueprint $table) {
            $table->id();
            $table->string('product_name')->nullable();
            $table->string('product_category_id')->nullable();
            $table->string('slogan')->nullable();
            $table->string('sku')->nullable();
            $table->string('tags')->nullable();
            $table->string('volume')->nullable();
            $table->string('wieght')->nullable();
            $table->string('layout_id')->nullable();
            $table->text('product_description')->nullable();
            $table->string('price')->nullable();
            $table->string('product_gallery')->nullable();
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
        Schema::dropIfExists('product');
    }
}
