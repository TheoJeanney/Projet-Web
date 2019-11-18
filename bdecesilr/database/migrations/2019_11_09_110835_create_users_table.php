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
        //Create the table
        Schema::create('Users', function (Blueprint $table) {
            //Our information in the database
            $table->increments('Id_user');
            $table->string('User_firstname',100);
            $table->string('User_lastname',100);
            $table->string('email',255);
            $table->integer('User_phone');
            $table->string('password',100);
            $table->integer('Id_status')->unsigned();
            $table->integer('Id_campus')->unsigned();
            $table->rememberToken();
            $table->timestamps();

            $table->foreign('Id_status')->references('Id_status')->on('Status')->onDelete('cascade');
            $table->foreign('Id_campus')->references('Id_campus')->on('Campus')->onDelete('cascade');

        });

        //Insert 4 roles to check the user rights
        DB::table('Users')->insert([
            ['User_firstname' => 'Theo','User_lastname' => 'role1', 'email' => 'etudiant@cesi.fr', 'User_phone' => '0637832389','password' => bcrypt('etudiant') , 'Id_status' => '1','Id_campus' => '10'],
            ['User_firstname' => 'Max','User_lastname' => 'role2', 'email' => 'bde@cesi.fr', 'User_phone' => '0637745389','password' => bcrypt('bde') , 'Id_status' => '2','Id_campus' => '7'],
            ['User_firstname' => 'Joana','User_lastname' => 'role3', 'email' => 'personnel@cesi.fr', 'User_phone' => '0632541389','password' => bcrypt('personnel') , 'Id_status' => '3','Id_campus' => '5'],
            ['User_firstname' => 'Lulu','User_lastname' => 'role4', 'email' => 'admin@cesi.fr', 'User_phone' => '0658694789','password' => bcrypt('admin') , 'Id_status' => '4','Id_campus' => '2'],
            ]);
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