<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('wallets', function (Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');
            $table->increments('id_client')->unsigned();
            $table->increments('id_crypto')->unsigned();
            $table->timestamps();
        });

        Schema::table('wallets', function($table) {
            $table->foreign('id_client')->references('id')->on('users');
            $table->foreign('id_crypto')->references('id')->on('cryptos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallets');
    }
}
