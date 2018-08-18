<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProductosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('productos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre',50);
            $table->string('descripcion')->nullable();
            $table->string('Umedida')->nullable();
            $table->integer('stock');
            $table->string('imagen')->nullable();
            $table->boolean('ExcentoDescuento')->default(0);
            $table->decimal('precio');
            $table->decimal('P25')->nullable();
            $table->decimal('P29')->nullable();
            $table->decimal('P30')->nullable();
            $table->decimal('P35')->nullable();
            $table->decimal('P40')->nullable();
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
        Schema::dropIfExists('productos');
    }
}
