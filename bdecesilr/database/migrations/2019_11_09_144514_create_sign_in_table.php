<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
Schema::enableForeignKeyConstraints();
class CreateSignInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Sign_in', function (Blueprint $table) {
            //Our information in the database
            $table->integer('Id_posts')->unsigned();
            $table->integer('Id_user')->unsigned();

            $table->foreign('id_posts')->references('id_posts')->on('posts');
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
        Schema::dropIfExists('Sign_in');
    }
}