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
            $table->increments('id_signin');
            $table->integer('user_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->timestamps();

            $table->foreign('post_id')->references('id_posts')->on('posts')->onDelete('cascade');
            $table->foreign('user_id')->references('Id_user')->on('Users')->onDelete('cascade');
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