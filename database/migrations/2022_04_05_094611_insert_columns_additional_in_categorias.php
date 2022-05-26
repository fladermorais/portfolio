<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertColumnsAdditionalInCategorias extends Migration
{
    /**
    * Run the migrations.
    *
    * @return void
    */
    public function up()
    {
        Schema::table('categoria_produtos', function (Blueprint $table) {
            $table->string('icone');
            $table->string('previa');
            $table->longText('descricao');
        });
    }
    
    /**
    * Reverse the migrations.
    *
    * @return void
    */
    public function down()
    {
        Schema::table('categoria_produtos', function (Blueprint $table) {
            $table->dropColumn('icone');
            $table->dropColumn('previa');
            $table->dropColumn('descricao');
        });
    }
}