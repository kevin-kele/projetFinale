<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWalletHistoricsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('WalletHistorics', function (Blueprint $table) {
            $table->increments('id');
            $table->increments('wallet_id')->unsigned();
            $table->string('type');
            $table->integer('montant_unitair');
            $table->integer('quantite');
            $table->date('date');
            $table->timestamps();
        });

        Schema::table('WalletHistorics', function($table) {
            $table->foreign('wallet_id')->references('id')->on('wallets');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('wallet_historics');
    }
}
