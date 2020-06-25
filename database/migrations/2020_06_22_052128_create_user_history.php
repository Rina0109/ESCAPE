<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserHistory extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('user_history', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('user_id');
            $table->integer('store_id');
            $table->foreign('user_id')->references('id')->on('user');
            $table->foreign('store_id')->references('id')->on('store');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('user_history');
    }
}