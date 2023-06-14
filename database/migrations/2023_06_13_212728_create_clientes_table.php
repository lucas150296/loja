<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->id();
            $table->string('tipo_documento', 6);
            $table->string('documento', 100);
            $table->string('nome', 100);
            $table->string('razao_social', 100)->nullable();
            $table->string('celular', 11);
            $table->date('data_nascimento');
            $table->string('sexo', 10);
            $table->string('categoria', 20);
            $table->string('cep', 100);
            $table->string('cidade', 100);
            $table->string('estado', 2);
            $table->string('endereco', 100);
            $table->string('numero', 5);
            $table->string('bairro', 100);
            $table->string('limite_credito', 100)->default('0');
            $table->string('dia_vencimento', 2)->nullable();
            $table->string('cliente_inativo', 1)->default('0');
            $table->string('venda_bloqueada', 1)->default('0');
            $table->text('outro')->nullable();
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
        Schema::dropIfExists('clientes');
    }
}
