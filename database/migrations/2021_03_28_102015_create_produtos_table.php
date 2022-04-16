<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

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
            
            $table->bigInteger('categoria_id')->unsigned();
            $table->foreign('categoria_id')->references('id')->on('categoria_produtos');
            
            $table->string('titulo');
            $table->longText('descricao');
            $table->string('imagem')->nullable();
            $table->string('link');
            $table->enum('status', ['ativo', 'inativo'])->default('inativo');
            
            $table->timestamps();

            $table->string('seo_titulo');
            $table->longText('seo_descricao');
            $table->string('seo_canonical');
            $table->string('seo_keywords');
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::dropIfExists('produtos');
    }
}
