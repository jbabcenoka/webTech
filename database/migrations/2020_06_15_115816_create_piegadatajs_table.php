<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePiegadatajsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
  
 public function up()
    {
        Schema::create('Piegadatajs', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("ZiedaPuskaVeids",20)->unique();
            $table->string("PersUznKods",20)->unique;
            $table->string("PVards",20)->nullable();
            $table->string("PUzvards",20)->nullable();
            $table->string("UznNosaukums",20)->nullable();
            $table->integer("Telefons");
            $table->float("CenaParVienu");
            $table->boolean("BooleanPuskisZieds");
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
        Schema::dropIfExists('piegadatajs');
    }
}
