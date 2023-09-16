<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessagesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('messages', function (Blueprint $table) {
            $table->integer('id_message')->autoIncrement();
            $table->string('name', 30);
            $table->string('email', 40);
            $table->string('tel', 20);
            $table->text('text');
            $table->timestamp_date();
        });
        // Schema::table('messages', function(Blueprint $table){
        //     $table->renameColumn('created_at', 'date');
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('messages');
    }
}
