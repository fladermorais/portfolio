<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\NoticiaStoreRequest;
use App\Http\Requests\NoticiaUpdateRequest;
use App\Models\Categoria;
use App\Models\Noticia;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Gate;

class NoticiaController extends Controller
{
    public function index()
    {
        if(Gate::denies('noticias.index')){
            abort(403, "Não Autorizado");
        }
        $noticias = Noticia::orderBy('nome', 'asc')->get();
        return view('Admin.noticias.index', compact('noticias'));
    }
    
    public function create()
    {
        if(Gate::denies('noticias.create')){
            abort(403, "Não Autorizado");
        }
        $categorias = Categoria::orderBy('nome', 'asc')->get();
        return view('Admin.noticias.create', compact('categorias'));
    }
    
    public function store(NoticiaStoreRequest $request)
    {
        if(Gate::denies('noticias.create')){
            abort(403, "Não Autorizado");
        }
        $data = $request->all();
        $noticia = new Noticia;
        
        $response = $noticia->newInfo($data);
        
        if($response){
            flash('Notícia Salva com sucesso!')->success();
            return redirect()->route('noticias.index');
        } else {
            flash('Erro ao salvar a notícia')->warning();
            return redirect()->route('noticias.index');
        }
    }
    
    public function edit($id)
    {
        if(Gate::denies('noticias.edit')){
            abort(403, "Não Autorizado");
        }
        $info = Noticia::find($id);
        if(!isset($info)){
            flash("Notícia não existe no sistema!")->warning();
            return redirect()->back();
        }
        $categorias = Categoria::orderBy('nome', 'asc')->get();
        return view('Admin.noticias.edit', compact('categorias', 'info'));
    }
    
    public function update(NoticiaUpdateRequest $request, $id)
    {
        if(Gate::denies('noticias.edit')){
            abort(403, "Não Autorizado");
        }
        $noticia = Noticia::find($id);
        if(!isset($noticia)){
            flash("Notícia não existe no sistema!")->warning();
            return redirect()->back();
        }
        $data = $request->all();
        
        $response = $noticia->updateInfo($data);
        if($response){
            flash('Notícia atualizada com sucesso!')->success();
            return redirect()->route('noticias.index');
        } else {
            flash('Nenhuma mudança realizada!')->warning();
            return redirect()->route('noticias.index');
        }
    }
    
    public function delete($id)
    {
        if(Gate::denies('noticias.delete')){
            abort(403, "Não Autorizado");
        }
        $noticia = Noticia::find($id);
        if(!isset($noticia)){
            flash("Notícia não existe no sistema!")->warning();
            return redirect()->back();
        }
        
        if(isset($noticia->imagem) && $noticia->imagem != NULL){
            $path = public_path('/storage/noticias/');
            $file = $noticia->imagem;
            $arquivo = $path.$file;
            
            if(file_exists($arquivo)){
                unlink($arquivo);
            }

            $path2 = public_path('/storage/thumb/noticias/');
            $arquivo2 = $path2.$file;
            if(file_exists($arquivo2)){
                unlink($arquivo2);
            }
        }
        
        $noticia->delete();
        
        flash('Notícia excluída do Sistema!')->overlay();
        return redirect()->route('noticias.index');
    }
}
