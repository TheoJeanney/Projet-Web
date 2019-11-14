<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePostsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('posts', function (Blueprint $table) {
            $table->increments('id_posts');
            $table->string('title',150);
            $table->mediumText('body');
            $table->string('web_image');
            $table->timestamps();
        });
        DB::table('posts')->insert([
            ['title' => 'Lucas','body' => 'Trop beau', 'web_image' => 'image1']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('posts');
    }
}