<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateEmpresaProductoTable extends Migration
{

    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('empresa_producto', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('fk_empresa')->unsigned();
            $table->integer('fk_producto')->unsigned();
            $table->timestamps();
            $table->foreign('fk_empresa')->references('id')->on('empresa');
            $table->foreign('fk_producto')->references('id')->on('producto');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('empresa_producto');
    }
}
