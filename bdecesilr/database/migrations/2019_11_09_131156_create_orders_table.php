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
        Schema::create('Orders', function (Blueprint $table) {
            //Our information in the database
            $table->increments('Id_order');
            $table->integer('Order_number');
            $table->decimal('Order_price',9,3);
            $table->integer('Order_amount');
            $table->date('Order_date');
            $table->integer('Id_user')->unsigned();
            $table->timestamps();

            $table->foreign('Id_user')->references('Id_user')->on('Users');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Orders');
    }
}
