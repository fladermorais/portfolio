<?php

namespace App\Http\Middleware;

use App\Models\CategoriaProduto;
use App\Models\Config;
use App\Models\Redes;
use App\Models\Titulo;
use Closure;

class AlteraConfig
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $config = Config::first();

        config(['app.empresas.logo' => $config->logo]);
        config(['app.empresas.nome' => $config->nome]);
        config(['app.empresas.telefone' => $config->telefone]);
        config(['app.empresas.telefone2' => $config->telefone2]);
        config(['app.empresas.whatsapp' => $config->whatsapp]);
        config(['app.empresas.email' => $config->email]);
        config(['app.empresas.slogan' => $config->slogan]);
        config(['app.empresas.subtitulo' => $config->subtitulo]);
        config(['app.empresas.cidade' => $config->cidade]);
        config(['app.empresas.estado' => $config->estado]);
        config(['app.empresas.pais' => $config->pais]);
        config(['app.empresas.descricao' => $config->descricao]);
        config(['app.empresas.ativaBlog' => $config->ativaBlog]);

        config(['app.empresas.seoTitle' => $config->seo_titulo]);
        config(['app.empresas.seoDescription' => $config->seo_descricao]);
        config(['app.empresas.seoKeywords' => $config->seo_keywords]);

        $redes = Redes::all();
        config(['app.redes' => $redes]);

        $categorias = CategoriaProduto::with('produtos')->get();
        config(['app.categorias' => $categorias]);

        if (!session()->has('categoriaProdutos')) {
            $categoriaProdutos = CategoriaProduto::orderBy('nome')->get();
            session()->put(['categoriaProdutos' => $categoriaProdutos]);
        }

        $titulos = Titulo::all();

        if (!session()->has('nossosServicos')) {
            foreach ($titulos as $t) {
                if ($t->referencia == 'Serviços') {
                    session()->put(['nossosServicos' => $t]);
                    break;
                }
            }
        }

        return $next($request);
    }
}
