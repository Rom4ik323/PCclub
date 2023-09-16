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
            $table->integer('id_product')->autoIncrement();
            $table->string('name', 100);
            $table->string('photo', 50);
            $table->string('category', 50);
            $table->string('subcategory', 50);
            $table->string('article', 50);
            $table->string('brand', 50);
            $table->integer('price');
            $table->string('country', 30);
            $table->string('production', 30);
            $table->string('weight', 10);
            $table->string('height', 10);
            $table->string('colour', 50);
            $table->string('material', 30);
            $table->string('location', 30);
            $table->text('description');
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
