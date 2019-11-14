<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStatusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Status', function (Blueprint $table) {
            //Our information in the database
            $table->increments('Id_status');
            $table->string('Status_name',100);
        });

        DB::table('Status')->insert([
            ['Status_name' => 'Etudiants'], 
            ['Status_name' => 'Membre du BDE'],
            ['Status_name' => 'Personnel du CESI'],
            ['Status_name' => 'Admin']
        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Status');
    }
}
