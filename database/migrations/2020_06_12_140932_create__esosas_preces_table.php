<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEsosasPrecesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('_esosas_preces', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("PartijasKods",20)->unique();
            $table->date("DerigumaTermins");
            $table->date("PiegadesDatums");
            $table->integer("ZieduSkaits");
            $table->string("ZiedaPuskaVeids",20);
            //$table->foreign('ZiedaPuskaVeids')->references('ZiedaPuskaVeids')->on('Ziedu_glab_apstakli');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('_esosas_preces');
    }
}
