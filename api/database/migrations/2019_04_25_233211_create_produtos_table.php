<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProdutosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('produtos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome', 100)->nullable();
            $table->string('descricao', 255);
            $table->decimal('valorVenda', 8, 2);
            $table->integer('quantidade')->nullable();
            $table->enum('ativo', ['y', 'n'])->nullable();
            $table->integer('categoriaProduto_id')->unsigned();
            $table->foreign('categoriaProduto_id')
                ->references('id')
                ->on('categoria_produtos')
                ->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('protudos');
    }
}
