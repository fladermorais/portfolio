<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuamSomosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('quem_somos', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->string('titulo');
            $table->longText('missao')->nullable();
            $table->longText('valores')->nullable();
            $table->longText('objetivos')->nullable();
            $table->longText('descricao');
            $table->string('imagem');

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
        Schema::dropIfExists('quem_somos');
    }
}
