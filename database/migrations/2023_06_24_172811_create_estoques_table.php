<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEstoquesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estoques', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('loja_id');
            $table->foreign('loja_id')->references('id')->on('lojas');
            $table->timestamps();
        });
        Schema::create('estoques_produtos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('estoque_id');
            $table->foreign('estoque_id')->references('id')->on('estoques');
            $table->unsignedBigInteger('produto_id');
            $table->foreign('produto_id')->references('id')->on('produtos');
            $table->integer('quantidade')->default(0);
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
        Schema::dropIfExists('estoques');
        Schema::dropIfExists('estoques_produtos');
        Schema::enableForeignKeyConstraints();
    }
}
