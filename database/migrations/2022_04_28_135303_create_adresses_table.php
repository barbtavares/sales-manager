<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAdressesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('adresses', function (Blueprint $table) {
            
            $table->id();
            $table->string('street');
            $table->string('number');
            $table->string('district');
            $table->string('state');
            $table->integer('zipcode');
            $table->timestamps();

            //$table->integer('client_id')->unsigned();          
            //$table->foreign('client_id')->references('id')->on('clients');
        });
    }   

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('adresses');
    }
}
