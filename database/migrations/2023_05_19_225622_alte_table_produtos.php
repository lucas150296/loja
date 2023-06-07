<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlteTableProdutos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->string('codigo', 3);
            $table->string('cod_barras', 100)->nullable()->default(NULL);
            $table->string('custo', 100);
            $table->unsignedBigInteger('setor_id');
            $table->string('status', 1);
            $table->string('imagemCapa', 100)->default('sem foto.jpg');
            $table->string('tipo_cadastro', 1);
            $table->string('disponivel_venda', 1);
            $table->string('destaque', 1)->nullable()->default('0');
            $table->string('oferta', 1)->nullable()->default('0');
            $table->string('valor_desconto', 2)->nullable()->default('0');
            $table->date('data_f_oferta')->nullable()->default(NULL);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('produtos', function (Blueprint $table) {
            $table->dropColumn('codigo','cod_barras','setor_id', 'status', 'preco','tipo_cadastro', 'disponivel_venda', 'destaque', 'ofreta','valor_desconto',
        'data_f_oferta');
        });
    }
}
