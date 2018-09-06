<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepVentasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rep_ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->string('tienda_id');
            $table->string('nomtienda');
            $table->integer('cliente_id');
            $table->integer('operacion_id');
            $table->decimal('monto');
            $table->string('registrounico');
            $table->enum('condicion',['EFECTIVO','CREDITO']);
            $table->boolean('cancelado')->nullable();
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
        Schema::dropIfExists('rep_ventas');
    }
}
