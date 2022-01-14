<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

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
            $table->increments('id');
            $table->string('name', 64)->nullable(false);
            $table->string('description', 255);
            $table->decimal('price', 5, 2)->nullable(false)->default(0);
            $table->string('image', 255)->default('');
            $table->integer('category_id')->unsigned()->nullable(false);
            $table->integer('brand_id')->unsigned()->nullable(false);

            //$table->primary('id');
            $table->foreign('category_id')->references('id')->on('categories');
            $table->foreign('brand_id')->references('id')->on('brands');
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
