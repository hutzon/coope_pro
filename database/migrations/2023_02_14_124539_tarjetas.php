<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //

        Schema::create('tarjetas', function (Blueprint $table) {


            $table->bigIncrements('id');
            $table->string('cod_socio');
            $table->string('nombre');
            $table->string('apellido1');
            $table->string('apellido2');
            $table->string('numero_tc');
            $table->string('fch_con');
            $table->decimal('monto', 10,2)->default(0);
            $table->decimal('saldo', 10,2)->default(0);
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
        //
        Schema::dropIfExists('tarjetas');
    }
};
