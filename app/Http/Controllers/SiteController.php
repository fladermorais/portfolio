<?php

namespace App\Http\Controllers;

use SEO;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use Artesaos\SEOTools\Facades\JsonLd;
use App\Models\Banner;
use App\Models\Categoria;
use App\Models\CategoriaProduto;
use App\Models\Cliente;
use App\Models\Config;
use App\Models\Contato;
use App\Models\Noticia;
use App\Models\Produto;
use App\Models\QuemSomos;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\URL;
use Spatie\Sitemap\Sitemap;
use Spatie\Sitemap\SitemapGenerator;
use Spatie\Sitemap\SitemapIndex;

class SiteController extends Controller
{
    public function index()
    {   
        // Sitemap::create()
        // ->add(route('home'))
        // ->add(route('sobre'))
        // ->writeToFile(public_path('sitemap.xml'));
        
        $plataformas = Produto::where('categoria_id', 1)->get();
        $numeracoes = Produto::where('categoria_id', 2)->get();
        $terminacoes = Produto::where('categoria_id', 3)->get();
        $banner = Banner::orderBy('nome')->first();
        $clientes = Cliente::orderBy('nome')->get();
        
        $keywords = config('app.empresas.seoKeywords');
        $keywords = str_replace(' ', '', $keywords);
        $keywords = explode(",", $keywords);
        $newKeywords = "";
        foreach($keywords as $value){
            $newKeywords .= "'".$value."',";
        }
        $newKeywords = substr($newKeywords, 0, strlen($newKeywords) -1);
        
        SEOTools::metatags();
        SEOTools::twitter();
        SEOTools::opengraph();
        SEOTools::jsonLd();
        
        SEOTools::setTitle(config('app.empresas.seoTitle'));
        SEOTools::setDescription(config('app.empresas.seoDescription'));
        SEOTools::setCanonical(URL::current());
        SEOTools::addImages(asset('storage/logo/'. config('app.empresas.logo')));
        SEOMeta::setKeywords($newKeywords);
        
        return view('Site.welcome', compact('plataformas', 'numeracoes', 'terminacoes', 'banner', 'clientes'));
    }
    
    public function sobre()
    {
        // Sitemap::create('http://brdvoz.com.br')
        // // ->getSitemap()
        // ->add(route('sobre'))
        // ->writeToFile(public_path('sitemap.xml'));
        
        $sobre = QuemSomos::first();
        
        $keywords = str_replace(' ', '', $sobre->seo_keywords);
        $keywords = explode(",", $keywords);
        $newKeywords = "";
        foreach($keywords as $value){
            $newKeywords .= "'".$value."',";
        }
        $newKeywords = substr($newKeywords, 0, strlen($newKeywords) -1); 
        
        SEOTools::metatags();
        SEOTools::twitter();
        SEOTools::opengraph();
        SEOTools::jsonLd();
        
        SEOTools::setTitle($sobre->seo_titulo);
        SEOTools::setDescription($sobre->seo_descricao);
        SEOTools::setCanonical(URL::current());
        SEOTools::addImages(asset('storage/quemsomos/'.$sobre->imagem));
        SEOMeta::setKeywords($newKeywords);
        
        return view('Site.sobre', compact('sobre'));
    }
    
    public function produto($alias)
    {
        // SitemapGenerator::create(public_path('sitemap.xml'))
        // ->getSitemap()
        // ->add(route('produto', $alias))
        // ->writeToFile(public_path('sitemap.xml'));
        
        $produto = Produto::where('alias', $alias)->with('recursos')->first();
        if(!isset($produto)){
            return back();
        }
        $keywords = str_replace(' ', '', $produto->seo_keywords);
        $keywords = explode(",", $keywords);
        $newKeywords = "";
        foreach($keywords as $value){
            $newKeywords .= "'".$value."',";
        }
        $newKeywords = substr($newKeywords, 0, strlen($newKeywords) -1);
        
        SEOTools::metatags();
        SEOTools::twitter();
        SEOTools::opengraph();
        SEOTools::jsonLd();
        
        SEOTools::setTitle($produto->seo_titulo);
        SEOTools::setDescription($produto->seo_descricao);
        SEOTools::setCanonical(URL::current());
        SEOMeta::setKeywords($newKeywords);
        
        
        $referencias = Produto::where('id', '!=', $produto->id)->inRandomOrder()->limit(3)->get();
        return view('Site.produto', compact('produto', 'referencias'));
    }
    
    public function servicos()
    {
        $categorias = CategoriaProduto::orderBy('nome')->with('produtos')->get();
        
        return view('Site.servicos', compact('categorias'));
    }
    
    public function contato()
    {
        return view('Site.contato');
    }
    
    // public function contatoForm(Request $request)
    // {
    //     $data = $request->all();
        
    //     $mensagem = new Contato();
    //     $mensagem->nome     =   $data['nome'];
    //     $mensagem->telefone =   $data['telefone'];
    //     $mensagem->whatsapp =   $data['telefone'];
    //     $mensagem->email    =   $data['email'];
    //     $mensagem->assunto  =   $data['assunto'];
    //     $mensagem->mensagem =   $data['mensagem'];
    //     $mensagem->save();
        
    //     flash('Mensagem enviada com sucesso. Em breve entraremos em contato!')->success();
    //     return redirect()->back();
    // }
    
    // public function mensagens()
    // {
    //     if(Gate::denies('mensagens')){
    //         abort(403, "Não Autorizado");
    //     }
    //     $mensagens = Contato::orderBy('lido', 'desc')->orderBy('created_at', 'desc')->get();
    //     return view('Site.mensagens', compact('mensagens'));
    // }
    
    public function noticias()
    {
        $categorias = Categoria::orderBy('created_at', 'asc')->get();
        $noticias = Noticia::orderBy('created_at', 'desc')->paginate(6);
        return view('Site.noticias', compact('noticias', 'categorias'));
    }
    
    public function noticia($alias)
    {
        $categorias = Categoria::orderBy('created_at', 'asc')->get();
        $noticia = Noticia::where('alias', $alias)->first();
        
        $keywords = str_replace(' ', '', $noticia->seo_keywords);
        $keywords = explode(",", $keywords);
        $newKeywords = "";
        foreach($keywords as $value){
            $newKeywords .= "'".$value."',";
        }
        $newKeywords = substr($newKeywords, 0, strlen($newKeywords) -1);
        
        SEOTools::metatags();
        SEOTools::twitter();
        SEOTools::opengraph();
        SEOTools::jsonLd();
        
        SEOTools::setTitle($noticia->seo_titulo);
        SEOTools::setDescription($noticia->seo_descricao);
        SEOTools::setCanonical(URL::current());
        SEOTools::addImages(asset('storage/noticias/'.$noticia->imagem));
        SEOMeta::setKeywords($newKeywords);
        
        return view('Site.noticia', compact('noticia', 'categorias'));
    }
    
    public function categorias($alias)
    {
        $categoria = Categoria::where('alias', $alias)->first();
        $categorias = Categoria::orderBy('created_at', 'asc')->get();
        $noticias = Noticia::where('categoria_id', $categoria->id)->orderBy('created_at', 'desc')->paginate(6);
        return view('Site.noticias', compact('noticias', 'categorias', 'categoria'));
    }
}
