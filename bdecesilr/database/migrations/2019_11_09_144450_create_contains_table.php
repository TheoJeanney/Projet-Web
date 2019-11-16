<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContainsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Contains', function (Blueprint $table) {
            //Our information in the database
            $table->integer('Id_product')->unsigned();
            $table->integer('Id_order')->unsigned();

            $table->foreign('Id_product')->references('Id_product')->on('Products')->onDelete('cascade');
            $table->foreign('Id_order')->references('Id_order')->on('Orders')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Contains');
    }
}
