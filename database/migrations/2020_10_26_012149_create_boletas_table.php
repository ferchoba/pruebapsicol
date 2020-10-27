<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBoletasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('boletas', function (Blueprint $table) {
            //$table->id();
			$table->increments('id'); 
			//$table->unsignedBigInteger('id_evento'); 
			$table->unsignedInteger('id_evento'); 
			$table->foreign('id_evento')->references('id')->on('eventos');
			//$table->unsignedBigInteger('id_comprador'); 
			$table->unsignedInteger('id_comprador'); 
			$table->foreign('id_comprador')->references('id')->on('compradores');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('boletas');
    }
}
