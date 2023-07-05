<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLojasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lojas', function (Blueprint $table) {
            $table->id();
            $table->string('Endereco', 100);
            $table->integer('Endereco_Numero');
            $table->string('Bairro', 100);
            $table->integer('Telefone');
            $table->string('CNPJ', 100)->unique();
            $table->string('Cidade', 100);
            $table->string('Estados', 2);
            $table->string('Nome_Fantasia', 100);
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
        Schema::dropIfExists('lojas');
    }
}
