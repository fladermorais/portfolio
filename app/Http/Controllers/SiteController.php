<?php

namespace App\Http\Controllers;

use SEO;
use Artesaos\SEOTools\Facades\SEOMeta;
use Artesaos\SEOTools\Facades\SEOTools;
use App\Models\Categoria;
use App\Models\CategoriaProduto;
use App\Models\Cliente;
use App\Models\Galeria;
use App\Models\Noticia;
use App\Models\Produto;
use App\Models\QuemSomos;
use App\Models\Redes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class SiteController extends Controller
{
    public function index()
    {   
        if(config('app.empresas.emConstrucao') == "sim"){
            return view('Site.construcao');
        }
        
        // dd(config('app.categorias'));
        // Sitemap::create()
        // ->add(route('home'))
        // ->add(route('sobre'))
        // ->writeToFile(public_path('sitemap.xml')); 
        
        $quemsomos = QuemSomos::where('ordem', '!=', 1)->get();
        $sobre = QuemSomos::where('ordem', '=', 1)->first();

        $redes = Redes::get();
        $noticias = Noticia::where('status', 'ativo')->orderBy('created_at', 'desc')->limit(6)->get();
        
        $fotos = Galeria::orderBy('created_at', 'desc')->limit(6)->get();

        // dd($noticias);
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
        
        return view('Site.welcome', compact('quemsomos', 'redes', 'noticias', 'sobre', 'fotos'));
    }
    
    public function sobre()
    {   
        // dd(config('app.categorias'));
        // Sitemap::create()
        // ->add(route('home'))
        // ->add(route('sobre'))
        // ->writeToFile(public_path('sitemap.xml'));
        
        $parceiros = Cliente::where('status', 'ativo')->where('home', 'sim')->orderBy('nome')->get();
        $produtos = Produto::where('status', 'ativo')->where('destaque', 'sim')->get();
        $quemsomos = QuemSomos::first();
        
        $redes = Redes::get();
        
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
        
        return view('Site.sobre', compact('parceiros', 'quemsomos', 'produtos', 'redes'));
    }
    
    public function produtos(Request $request, $alias)
    {
        $data = $request->all();
        
        $query = Produto::where('status', 'ativo');
        $categorias = CategoriaProduto::orderBy('nome', 'asc')->get();
        
        if($alias != "all"){ 
            $categoria = CategoriaProduto::where('alias', $alias)->first();
            if(isset($categoria)){
                $query->where('categoria_id', $categoria->id);
            }
        } else {
            if(count($data) > 0){
                $query->where(function ($q) use($data){
                    $q->orWhere('titulo', 'like', "%" . $data['s'] . "%")
                    ->orWhere('descricao', 'like', "%" . $data['s'] . "%");
                });
            }
        }
        $produtos = $query->orderBy('titulo', 'asc')->paginate(12);
        $parceiros = Cliente::where('status', 'ativo')->where('paginas', 'sim')->orderBy('nome')->inRandomOrder()->get();
        return view('Site.produtos', compact('categorias', 'produtos', 'parceiros', 'data'));
    }
    
    public function produto($alias)
    {
        // SitemapGenerator::create(public_path('sitemap.xml'))
        // ->getSitemap()
        // ->add(route('produto', $alias))
        // ->writeToFile(public_path('sitemap.xml'));
        
        $produto = Produto::where('alias', $alias)->with('galerias')->first();
        // dd($produto);
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
        
        $parceiros = Cliente::where('status', 'ativo')->where('paginas', 'sim')->orderBy('nome')->inRandomOrder()->get();
        $referencias = Produto::where('id', '!=', $produto->id)->inRandomOrder()->limit(4)->get();
        return view('Site.produto', compact('produto', 'referencias', 'parceiros'));
    }
    
    public function contato()
    {
        return view('Site.contato');
    }
    
    public function noticias(Request $request)
    {
        $data = $request->all();
        $query = Noticia::where('status', 'ativo')->orderBy('created_at', 'desc');
        if(count($data) > 0){
            $query->where(function ($q) use($data){
                $q->orWhere('nome', 'like', "%" . $data['s'] . "%")
                ->orWhere('descricao', 'like', "%" . $data['s'] . "%");
            });
        }
        
        $categorias = Categoria::orderBy('created_at', 'asc')->get();
        $noticias = $query->paginate(6);
        return view('Site.noticias', compact('noticias', 'categorias', 'data'));
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
        $noticias = Noticia::where('categoria_id', $categoria->id)->where('status', 'ativo')->orderBy('created_at', 'desc')->paginate(6);
        $categorias = Categoria::orderBy('created_at', 'asc')->get();
        return view('Site.noticias', compact('noticias', 'categorias', 'categoria'));
    }
}