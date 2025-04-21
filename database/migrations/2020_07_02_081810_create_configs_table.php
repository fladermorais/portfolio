<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateConfigsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('configs', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome');
            $table->string('endereco');
            $table->integer('numero');
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('pais')->nullable();
            $table->string('telefone');
            $table->string('telefone2')->nullable();
            $table->string('whatsapp');
            $table->string('email');
            $table->string('logo')->nullable();
            $table->text('descricao');
            $table->enum('ativaBlog', ['sim', 'nao'])->default('sim');
            $table->enum('emConstrucao', ['sim', 'nao'])->default('nao');
            $table->string('subtitulo')->nullable(); 
            $table->string('slogan')->nullable();
            $table->string('seo_titulo');
            $table->longText('seo_descricao');
            $table->string('seo_keywords');

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
        Schema::dropIfExists('configs');
    }
}
