<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->increments('id_comments');
            $table->text('comment');
            $table->boolean('approved');
            $table->integer('votes')->default(0);
            $table->integer('user_id')->unsigned();
            $table->integer('post_id')->unsigned();
            $table->timestamps();
    
            $table->foreign('user_id')->references('id_user')->on('Users')->onDelete('cascade');
            $table->foreign('post_id')->references('id_posts')->on('posts')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}