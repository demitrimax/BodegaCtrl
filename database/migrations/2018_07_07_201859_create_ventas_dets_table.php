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
            $table->integer('venta_id')->unsigned();
                $table->foreign('venta_id')->references('id')->on('ventas');
            $table->integer('cliente_id')->unsigned();
                $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->integer('producto_id');
            $table->integer('cantidad');
            $table->decimal('importe');
            $table->date('fecha');
            $table->softDeletes();
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
