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
        Schema::create('productos', function (Blueprint $table) {


            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->date('contact_date');
            $table->date('probable_date');
            $table->unsignedBigInteger("user_id")->index('fk_productos_users1_idx');
            $table->unsignedBigInteger("ahorro_id")->nullable()->index('fk_productos_ahorros1_idx');
            $table->unsignedBigInteger("prestamo_id")->nullable()->index('fk_productos_prestamos1_idx');
            $table->unsignedBigInteger("seguro_id")->nullable()->index('fk_productos_seguros1_idx');
            $table->string('codigo');
            $table->boolean('asociado');
            $table->string('description');
            $table->timestamps();


            //relaciones
            $table->foreign('user_id', 'fk_productos_users2')->references('id')->on('users')->onUpdate('no action')->onDelete('no action');
            $table->foreign('ahorro_id' , 'fk_productos_ahorro1')->references('id')->on('ahorros')->onDelete('cascade');
            $table->foreign('prestamo_id', 'fk_productos_prestamo1')->references('id')->on('prestamos')->onDelete('cascade');
            $table->foreign('seguro_id', 'fk_productos_seguro1')->references('id')->on('seguros')->onDelete('cascade');

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
        Schema::dropIfExists('productos');
    }
};
