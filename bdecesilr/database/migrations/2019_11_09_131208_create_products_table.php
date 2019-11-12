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
            //Our information in the database
            $table->bigIncrements('Id_products')->primary();
            $table->string('Product_name',100);
            $table->string('Product_description',100);
            $table->decimal('Product_price',9,3);
            $table->integer('Product_size');
            $table->integer('Product_stock');
            $table->integer('Product_amount');
            $table->string('Product_image',255);
            $table->integer('Id_category')->unsigned();

            $table->foreign('Id_category')->references('Id_category')->on('Category');
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
