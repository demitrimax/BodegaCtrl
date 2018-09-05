<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRepFinancierosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('rep_financieros', function (Blueprint $table) {
            $table->increments('id');
            $table->date('fecha');
            $table->string('tienda_id',10);
            $table->string('nomtienda',50);
            $table->string('operacion',10);
            $table->decimal('monto');
            $table->string('registrounico');
            $table->string('descripcion');
            $table->boolean('cancelado')->default(false);
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
        Schema::dropIfExists('rep_financieros');
    }
}
