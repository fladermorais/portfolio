<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ProdutoStoreRequest;
use App\Http\Requests\ProdutoUpdateRequest;
use App\Models\CategoriaProduto;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class ProdutoController extends Controller
{
    public function index()
    {
        if(Gate::denies('produtos.index')){
            abort(403, "Não Autorizado");
        }
        $produtos = Produto::orderBy('titulo')->get();
        return view('Admin.produtos.index', compact('produtos'));
    }
    
    public function create()
    {
        if(Gate::denies('produtos.create')){
            abort(403, "Não Autorizado");
        }
        $categorias = CategoriaProduto::orderBy('nome', 'asc')->get();
        return view('Admin.produtos.create', compact('categorias'));
    }
    
    public function store(ProdutoStoreRequest $request)
    {
        if(Gate::denies('produtos.create')){
            abort(403, "Não Autorizado");
        }
        $data = $request->all();
        $produto = new Produto;
        
        $response = $produto->newInfo($data);
        
        if($response){
            flash('Produto Salva com sucesso!')->success();
            return redirect()->route('produtos.index');
        } else {
            flash('Erro ao salvar a produtos')->warning();
            return redirect()->route('produtos.index');
        }
    }
    
    public function edit($id)
    {
        if(Gate::denies('produtos.edit')){
            abort(403, "Não Autorizado");
        }
        $info = Produto::find($id);
        if(!isset($info)){
            flash("Produto não existe no sistema!")->warning();
            return redirect()->back();
        }
        $categorias = CategoriaProduto::orderBy('nome', 'asc')->get();
        return view('Admin.produtos.edit', compact('categorias', 'info'));
    }
    
    public function update(ProdutoUpdateRequest $request, $id)
    {
        if(Gate::denies('produtos.edit')){
            abort(403, "Não Autorizado");
        }
        $produto = Produto::find($id);
        if(!isset($produto)){
            flash("Produto não existe no sistema!")->warning();
            return redirect()->back();
        }
        $data = $request->all();
        
        $response = $produto->updateInfo($data);
        if($response){
            flash('Produto atualizada com sucesso!')->success();
            return redirect()->route('produtos.index');
        } else {
            flash('Nenhuma mudança realizada!')->warning();
            return redirect()->route('produtos.index');
        }
    }
    
    public function delete($id)
    {
        if(Gate::denies('produtos.delete')){
            abort(403, "Não Autorizado");
        }
        $produto = Produto::find($id);
        if(!isset($produto)){
            flash("Produto não existe no sistema!")->warning();
            return redirect()->back();
        }
        
        $response = $produto->deleteInfo();
        if($response){
            flash('Produto excluída do Sistema!')->overlay();
            return redirect()->route('produtos.index');
        }
    }
}
