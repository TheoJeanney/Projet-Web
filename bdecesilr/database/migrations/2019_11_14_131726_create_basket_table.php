<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBasketTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('basket', function (Blueprint $table) {
            $table->increments('Id_basket');
            $table->integer('Basket_amount');
            $table->float('Basket_totalPrice');

            $table->integer('Id_user')->unsigned();
            $table->integer('Id_product')->unsigned();
            $table->timestamps();

            $table->foreign('Id_user')->references('Id_user')->on('Users')->onDelete('cascade');
            $table->foreign('Id_product')->references('Id_product')->on('Products')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('basket');
    }
}
