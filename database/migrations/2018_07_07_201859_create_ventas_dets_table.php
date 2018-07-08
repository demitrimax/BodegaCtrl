<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentasDetsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ventas_dets', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_venta')->unsigned();
                $table->foreign('id_venta')->references('id')->on('ventas');
            $table->integer('id_cliente')->unsigned();
                $table->foreign('id_cliente')->references('id')->on('clientes');
            $table->integer('id_producto');
            $table->integer('cantidad');
            $table->decimal('importe');
            $table->date('fecha');
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
        Schema::dropIfExists('ventas_dets');
    }
}
