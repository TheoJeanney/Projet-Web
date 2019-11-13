<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCampusTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Campus', function (Blueprint $table) {
            //Our information in the database
            $table->increments('Id_campus');
            $table->string('Campus_name',150);
            $table->timestamps();
        });

        DB::table('Campus')->insert([
            ['Campus_name' => 'Aix-en-Provence'], 
            ['Campus_name' => 'Angoulême'],
            ['Campus_name' => 'Arras'],
            ['Campus_name' => 'Bordeaux'],
            ['Campus_name' => 'Brest'],
            ['Campus_name' => 'Caen'],
            ['Campus_name' => 'Châteauroux'],
            ['Campus_name' => 'Dijon'],
            ['Campus_name' => 'Grenoble'],
            ['Campus_name' => 'La Rochelle'],
            ['Campus_name' => 'Le Mans'],
            ['Campus_name' => 'Lille'],
            ['Campus_name' => 'Lyon'],
            ['Campus_name' => 'Montpellier'],
            ['Campus_name' => 'Nancy'],
            ['Campus_name' => 'Nanterre'],
            ['Campus_name' => 'Nantes'],
            ['Campus_name' => 'Nice'],
            ['Campus_name' => 'Orléans'],
            ['Campus_name' => 'Pau'],
            ['Campus_name' => 'Reims'],
            ['Campus_name' => 'Rouen'],
            ['Campus_name' => 'Saint-Nazaire'],
            ['Campus_name' => 'Strasbourg'],
            ['Campus_name' => 'Toulouse'],

        ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Campus');
    }
}
