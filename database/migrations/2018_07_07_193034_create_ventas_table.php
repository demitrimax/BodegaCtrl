<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
                $table->foreign('id_usuario')->references('id')->on('users');
            $table->integer('id_cliente')->unsigned();
                $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->decimal('total');
            $table->integer('envases')->nullable();
            $table->boolean('pendiente');
            $table->dateTime('fecha')->default(DB::raw('CURRENT_TIMESTAMP'));
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
        Schema::dropIfExists('ventas');
    }
}
