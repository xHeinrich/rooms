<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateInboxesTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('inbox_rooms', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name')->nullable();
            $table->integer('user_id')->nullable();
            $table->boolean('private')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('inbox_messages', function (Blueprint $table) {
            $table->increments('id');
            $table->string('message');
            $table->integer('user_id')->nullable();
            $table->timestamps();
            $table->softDeletes();
        });

        Schema::create('room_user', function (Blueprint $table) {
            $table->integer('room_id');
            $table->integer('user_id');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('inbox_rooms');
        Schema::drop('inbox_messages');
        Schema::drop('room_user');
    }
}
