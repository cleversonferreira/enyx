<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBoardsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boards', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('status');
            $table->integer('user');
            $table->string('name');
            $table->string('mqtt_broker');
            $table->integer('mqtt_port');
            $table->string('mqtt_user');
            $table->string('mqtt_pass');
            $table->string('mqtt_publish');
            $table->string('mqtt_subscribe');
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
        Schema::dropIfExists('boards');
    }
}
