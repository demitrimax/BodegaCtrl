<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepInventariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rep_inventarios', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->string('tienda_id',10);
            $table->string('nomtienda',50)->nullable();
            $table->integer('producto_id');
            $table->string('Nproducto',50);
            $table->integer('saldo_inicial');
            $table->integer('entradas');
            $table->integer('cant_acum');
            $table->integer('salidas');
            $table->integer('stockreal');
            $table->string('idunicodia',50);
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
        Schema::dropIfExists('rep_inventarios');
    }
}
