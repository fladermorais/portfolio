<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoriaStoreRequest;
use App\Models\CategoriaProduto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class CategoriaProdutoController extends Controller
{
    public function index()
    {
        if(Gate::denies('categoriasProdutos.index')){
            abort(403, "Não Autorizado");
        }
        $categorias = CategoriaProduto::orderBy('nome', 'asc')->get();
        return view('Admin.categoriaProdutos.index', compact('categorias'));
    }

    public function create()
    {
        if(Gate::denies('categoriasProdutos.create')){
            abort(403, "Não Autorizado");
        }
        return view('Admin.categoriaProdutos.create');
    }
    
    public function store(CategoriaStoreRequest $request)
    {
        if(Gate::denies('categoriasProdutos.create')){
            abort(403, "Não Autorizado");
        }
        $data = $request->all();
        $categoria = new CategoriaProduto();

        $response = $categoria->newInfo($data);
        if($response){
            flash('Categoria criada com sucesso!')->success();
            return redirect()->route('categoriasProdutos.index');
        } else {
            flash('Erro ao criar categoria')->warning();
            return redirect()->route('categoriasProdutos.index');
        }
    }

    public function edit($id)
    {
        if(Gate::denies('categorias.edit')){
            abort(403, "Não Autorizado");
        }
        $categoria = CategoriaProduto::find($id);
        if(!isset($categoria)){
            flash('Categoria nao existe no sistema!')->error();
            return redirect()->back();
        }
        return view('Admin.categoriaProdutos.edit', compact('categoria'));
    }

    public function update(CategoriaStoreRequest $request, $id)
    {
        if(Gate::denies('categoriasProdutos.edit')){
            abort(403, "Não Autorizado");
        }
        
        $categoria = CategoriaProduto::find($id);
        if(!isset($categoria)){
            flash('Categoria nao existe no sistema!')->error();
            return redirect()->back();
        }

        $data = $request->all();

        $response = $categoria->updateInfo($data);
        if($response){
            flash('Categoria Atualizada com sucesso!')->success();
            return redirect()->route('categoriasProdutos.index');
        } else {
            flash('Nenhuma mudança realizada no sistema!')->warning();
            return redirect()->route('categoriasProdutos.index');
        }
    }

    public function delete($id)
    {
        if(Gate::denies('categoriasProdutos.delete')){
            abort(403, "Não Autorizado");
        }
        $categoria = CategoriaProduto::find($id);
        if(!isset($categoria)){
            flash('Categoria nao existe no sistema!')->error();
            return redirect()->back();
        }

        // $noticias = Noticia::where('categoria_id', $id)->count();
        // if($noticias >=1){
        //     flash('Existe Noticias vinculadas a esta categoria')->warning();
        //     return back();
        // }

        // $categoria->delete();
        // flash('Categoria excluída com sucesso')->success();
        // return back();
    }

}
