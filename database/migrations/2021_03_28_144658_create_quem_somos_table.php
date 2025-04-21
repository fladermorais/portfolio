<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuemSomosTable extends Migration
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
            $table->longText('descricao');
            $table->string('imagem');
            $table->integer('ordem')->default(1);
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
        Schema::dropIfExists('quem_somos');
    }
}
