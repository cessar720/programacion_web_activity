<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductoProveedorTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('producto_proveedor', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_producto')->unsigned();
            $table->integer('fk_proveedor')->unsigned();
            $table->timestamps();
            $table->foreign('fk_producto')->references('id')->on('producto');
            $table->foreign('fk_proveedor')->references('id')->on('proveedor');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('producto_proveedor');
    }
}
