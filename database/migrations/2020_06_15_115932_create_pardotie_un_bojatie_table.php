<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePardotieUnBojatieTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Pardotie_un_bojatie', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("PartijasKods",20); 
            $table->string("PersKods",12)->nullable();
            $table->integer("Skaits");
            $table->date("Datums");
            $table->string("ZiedaPuskaVeids",20);
            $table->boolean("BooleanPard");
            $table->foreignId('users_id')->constrained();
            $table->foreignId('persona_id')->constrained();
            $table->foreign('PartijasKods')->references('PartijasKods')->on('Esosas_preces');
            $table->foreign('ZiedaPuskaVeids')->references('ZiedaPuskaVeids')->on('Piegadatajs');

	 });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pardotie_un_bojatie');
    }
}
