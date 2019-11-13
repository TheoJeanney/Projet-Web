<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /*
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Users', function (Blueprint $table) {
            //Our information in the database
            $table->increments('Id_user');
            $table->string('User_firstname',100);
            $table->string('User_lastname',100);
            $table->string('User_email',255);
            $table->integer('User_phone');
            $table->string('User_password',100);
            $table->boolean('User_status')->default(0);
            $table->integer('Id_campus')->unsigned();
            $table->timestamps();

            $table->foreign('Id_campus')->references('Id_campus')->on('Campus');

        });
    }

    /*
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Users');
    }
    /**
 * Get the images.
 */
    public function images()
    {
    return $this->hasMany (Image::class);
    }
}