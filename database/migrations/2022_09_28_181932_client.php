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
        Schema::create('client', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email');
            $table->string('identificador_fiscal');
            $table->string('telefono');
            $table->string('calle');
            $table->string('numero');
            $table->string('colonia');
            $table->string('codigo_postal');
            $table->string('ciudad');
            $table->string('estado');
            $table->string('pais');
            $table->string('notas');
            $table->integer('user_id')->unsigned()->references('id')->on('users');
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
    }
};
