<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class InsertColumnSeoInNoticias extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('noticias', function (Blueprint $table) {
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
        Schema::table('noticias', function (Blueprint $table) {
            $table->dropColumn('seo_titulo');
            $table->dropColumn('seo_descricao');
            $table->dropColumn('seo_canonical');
            $table->dropColumn('seo_keywords');
        });
    }
}
