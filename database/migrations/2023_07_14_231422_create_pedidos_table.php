<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePedidosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('senha_de_autorizacao', 100);
            $table->unsignedBigInteger('cliente_id');
            $table->float('valor_pedido')->nullable()->default(0.0);
            $table->unsignedBigInteger('loja_id');
            $table->integer('status')->default('0');
            $table->integer('tipo_pagamento')->default('0');
            $table->integer('tipo_entrega')->nullable()->default(0);
            $table->foreign('cliente_id')->references('id')->on('clientes');
            $table->foreign('loja_id')->references('id')->on('lojas');
            $table->timestamps();
        });
        Schema::create('pedidos_produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('pedido_id');
            $table->unsignedBigInteger('produto_id');
            $table->foreign('pedido_id')->references('id')->on('pedidos');
            $table->foreign('produto_id')->references('id')->on('produtos');
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
        Schema::disableForeignKeyConstraints();
        Schema::dropIfExists('pedidos');
        Schema::dropIfExists('pedidos_produtos');
        Schema::enableForeignKeyConstraints();
    }
}
