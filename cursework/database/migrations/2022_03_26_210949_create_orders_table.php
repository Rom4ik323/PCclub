<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOrdersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('orders', function (Blueprint $table) {
            $table->integer('id_order')->autoIncrement();
            $table->integer('order_num');
            $table->string('surname', 30);
            $table->string('name', 30);
            $table->string('patronymic', 30)->nullable();
            $table->string('email', 40);
            $table->string('tel', 20);
            $table->string('delivery', 100);
            $table->string('pay', 50);
            $table->string('region', 70)->nullable();
            $table->string('city', 50)->nullable();
            $table->string('street', 50)->nullable();
            $table->string('house', 10)->nullable();
            $table->string('corpus', 10)->nullable();
            $table->string('flat', 10)->nullable();
            $table->text('comment')->nullable();
            $table->integer('sum');
            $table->timestamp_date();
            $table->string('status', 30);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('orders');
    }
}
