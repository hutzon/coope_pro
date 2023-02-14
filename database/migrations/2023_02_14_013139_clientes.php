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
        Schema::create('clientes', function (Blueprint $table) {


            $table->engine="InnoDB";
            $table->bigIncrements('id');
            $table->unsignedBigInteger("user_id");
            $table->string('dpi');
            $table->string('first_name');
            $table->string('second_name');
            $table->string('last_name');
            $table->string('address');
            $table->string('phone');
            $table->date('birth_date');
            $table->string('email')->unique();
            $table->timestamps();


            //relaciones
            $table->foreign('user_id', 'fk_clientes_users1')->references('id')->on('users')->onUpdate('no action')->onDelete('no action');

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
        Schema::dropIfExists('clientes');
    }
};
