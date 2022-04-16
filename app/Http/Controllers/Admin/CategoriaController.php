<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use App\Models\Categoria;
use App\Models\Noticia;

class CategoriaController extends Controller
{
    public function index()
    {
        if(Gate::denies('categorias.index')){
            abort(403, "Não Autorizado");
        }
        $categorias = Categoria::orderBy('nome', 'asc')->get();
        return view('Admin.categorias.index', compact('categorias'));
    }
    
    public function create()
    {
        if(Gate::denies('categorias.create')){
            abort(403, "Não Autorizado");
        }
        return view('Admin.categorias.create');
    }
    
    public function store(Request $request)
    {
        if(Gate::denies('categorias.create')){
            abort(403, "Não Autorizado");
        }
        $data = $request->all();
        $categoria = new Categoria();

        $validator = Validator::make($data, $categoria->rules());
        if($validator->fails()){
            flash('Preencha os campos obrigatórios')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }
        
        $response = $categoria->newInfo($data);
        if($response){
            flash('Categoria criada com sucesso!')->success();
            return redirect()->route('categorias.index');
        } else {
            flash('Erro ao criar categoria')->warning();
            return redirect()->route('categorias.index');
        }
    }

    public function edit($id)
    {
        if(Gate::denies('categorias.edit')){
            abort(403, "Não Autorizado");
        }
        $categoria = Categoria::find($id);
        if(!isset($categoria)){
            flash('Categoria nao existe no sistema!')->error();
            return redirect()->back();
        }
        return view('Admin.categorias.edit', compact('categoria'));
    }

    public function update(Request $request, $id)
    {
        if(Gate::denies('categorias.edit')){
            abort(403, "Não Autorizado");
        }
        
        $categoria = Categoria::find($id);
        if(!isset($categoria)){
            flash('Categoria nao existe no sistema!')->error();
            return redirect()->back();
        }

        $data = $request->all();

        $validator = Validator::make($data, $categoria->rules());
        if($validator->fails()){
            flash('Preencha os campos obrigatórios')->error();
            return redirect()->back()->withErrors($validator)->withInput();
        }
        $response = $categoria->updateInfo($data);
        if($response){
            flash('Categoria Atualizada com sucesso!')->success();
            return redirect()->route('categorias.index');
        } else {
            flash('Nenhuma mudança realizada no sistema!')->warning();
            return redirect()->route('categorias.index');
        }
    }

    public function delete($id)
    {
        if(Gate::denies('categorias.delete')){
            abort(403, "Não Autorizado");
        }
        $categoria = Categoria::find($id);
        if(!isset($categoria)){
            flash('Categoria nao existe no sistema!')->error();
            return redirect()->back();
        }

        $noticias = Noticia::where('categoria_id', $id)->count();
        if($noticias >=1){
            flash('Existe Noticias vinculadas a esta categoria')->warning();
            return back();
        }

        $categoria->delete();
        flash('Categoria excluída com sucesso')->success();
        return back();
    }
}
