<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateVeikalaDarbinieksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('Veikala_darbinieks', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->decimal('DarbaAlga',6,2);
            $table->date("AtvalinajumaSakums")->nullable();
            $table->date("AtvalinajumaBeigas")->nullable();
            $table->string("PersKods",12)->unique();
            $table->foreignId('Amats_id')->constrained();
            $table->foreign('PersKods')->references('PersKods')->on('Persona');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('veikala_darbinieks');
    }
}
