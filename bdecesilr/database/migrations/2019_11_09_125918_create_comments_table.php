<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

//Creation of the table comments.

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Comments', function (Blueprint $table) {
            //Our information in the database
            $table->bigIncrements('Id_comment')->primary(); 
            $table->string('Comment');
            $table->integer('Id_user')->unsigned();
            $table->integer('Id_photo')->unsigned();

            $table->foreign('Id_user')->references('Id_user')->on('Users');
            $table->foreign('Id_photo')->references('Id')->on('Photos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Comments');
    }
}
