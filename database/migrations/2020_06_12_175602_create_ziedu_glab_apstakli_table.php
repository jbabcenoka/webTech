<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateZieduGlabApstakliTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
       Schema::create('Ziedu_glab_apstakli', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("ZiedaPuskaVeids",20)->unique();
            $table->float("Mitrums");
            $table->float("Temperatura");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ziedu_glab_apstakli');
    }
}
