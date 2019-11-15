<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Creation of the table photos.

class CreatePhotosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('photos', function (Blueprint $table) {
            //Our information in the database
            $table->increments('Id_photo');
            $table->string('Photo_name');
            $table->string('Photo_url');
            $table->boolean('Photo_status');
            $table->integer('Photo_liked')->default(0);
            $table->integer('Id_user')->unsigned();
            $table->integer('id_posts')->unsigned();
            $table->timestamps();

            $table->foreign('Id_user')->references('Id_user')->on('Users');
            $table->foreign('id_posts')->references('id_posts')->on('posts');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Photos');
    }
}

