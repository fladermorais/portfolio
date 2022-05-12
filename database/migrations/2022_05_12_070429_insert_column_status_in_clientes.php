<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertColumnStatusInClientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->enum('status', ['ativo', 'inativo'])->default('ativo');
            $table->enum('home', ['sim', 'nao'])->default('nao');
            $table->enum('paginas', ['sim', 'nao'])->default('nao');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('clientes', function (Blueprint $table) {
            $table->dropColumn('status');
            $table->dropColumn('home');
            $table->dropColumn('paginas');
        });
    }
}
