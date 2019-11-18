<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Category', function (Blueprint $table) {
            //Our information in the database
            $table->increments('Id_category');
            $table->string('Category_name',100);
            $table->timestamps();
        });

        DB::table('Category')->insert([
            ['Category_name' => 'Tee_shirt'],
            ['Category_name' => 'Pantalon'],
            ['Category_name' => 'Chapeau'],
            ['Category_name' => 'Pull'],
            ['Category_name' => 'Tesla'],
        ]);


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Category');
    }
/**
     * Get the images.
     */
    public function images()
    {
        return $this->hasMany (Image::class);
    }
}


