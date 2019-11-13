<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Events', function (Blueprint $table) {
            //Our information in the database
            $table->increments('Id_event');
            $table->string('Event_name');
            $table->string('Event_description');
            $table->date('Event_date');
            $table->string('Event_image');
            $table->boolean('Event_signup');
            $table->boolean('Event_recurring');
            $table->integer('Id_user')->unsigned();
            $table->timestamps();

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
        Schema::dropIfExists('Events');
    }
}
