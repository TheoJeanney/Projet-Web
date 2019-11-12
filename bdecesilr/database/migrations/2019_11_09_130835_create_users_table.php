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
            $table->bigIncrements('Id_user')->primary();
            $table->string('User_firstname',100);
            $table->string('User_lastname',100);
            $table->string('User_email',255);
            $table->integer('User_phone');
            $table->string('User_password',100);
            $table->boolean('User_status');
            $table->integer('Id_campus')->unsigned();

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
}