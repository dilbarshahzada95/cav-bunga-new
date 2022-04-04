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
            $table->text('product_description')->nullable();
            $table->string('sku')->nullable();
            $table->string('price')->nullable();
            $table->string('parent_category_id')->nullable();
            $table->string('slogan')->nullable();
            $table->string('volume')->nullable();
            $table->string('height')->nullable();
            $table->string('tags')->nullable();
            $table->string('product_gallery')->nullable();
            $table->string('featured_title')->nullable();
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
