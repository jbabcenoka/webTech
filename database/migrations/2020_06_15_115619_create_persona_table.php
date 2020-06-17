<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
     public function up()
    {
        Schema::create('Personas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("PersKods",12);
            $table->string("Vards",30);
            $table->string("OtraisVards",30)->nullable();
            $table->string("Uzvards",30);	
            $table->integer("Telefons");
            //$table->integer("adreseid");
            $table->foreignId('adrese_id')->constrained();
        });
    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('personas');
    }
}
