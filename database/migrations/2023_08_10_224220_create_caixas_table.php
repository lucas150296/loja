<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCaixasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tipos_pagamentos', function (Blueprint $table){
            $table->id();
            $table->string('tipo', 100);
        });
        Schema::create('caixas', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('funcionario_id');
            $table->float('valor_venda');
            $table->date('data_venda');
            $table->unsignedBigInteger('tipo_pagamento_id');
            $table->foreign('funcionario_id')->references('id')->on('funcionarios');
            $table->foreign('tipo_pagamento_id')->references('id')->on('tipos_pagamentos');
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
        Schema::dropIfExists('caixas');
    }
}
