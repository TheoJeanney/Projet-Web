<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateProductsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Products', function (Blueprint $table) {
            //Our information in the product
            $table->increments('Id_product');
            $table->string('Product_name',100);
            $table->string('Product_description',100);
            $table->integer('Product_price');
            $table->integer('Product_stock');
            $table->string('Product_image',255);
            $table->integer('Id_category')->unsigned();
            $table->timestamps();

            $table->foreign('Id_category')->references('Id_category')->on('Category')->onDelete('cascade');
        });
    }  

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Products');
    }
}
