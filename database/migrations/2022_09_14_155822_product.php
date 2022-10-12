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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('sku');
            $table->string('descripcion');
            $table->string('cantidad');
            $table->string('precio_compra');
            $table->string('precio_venta');
            $table->string('divisa');
            $table->string('impuesto');
            $table->string('unidad');
            $table->string('marca');
            $table->string('imagen');
            $table->string('notas');
            $table->unsignedBigInteger('business_id');
            $table->foreign('business_id')->references('id')->on('business');
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
