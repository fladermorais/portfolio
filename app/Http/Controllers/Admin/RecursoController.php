<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Produto;
use App\Models\Recurso;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class RecursoController extends Controller
{
    public function index()
    {
        if(Gate::denies('recursos.edit')){
            abort(403, "Não Autorizado");
        }
        $recursos = Recurso::orderBy('titulo')->get();
        return view('Admin.recursos.index', compact('recursos'));
    }

    public function create()
    {
        if(Gate::denies('recursos.create')){
            abort(403, "Não Autorizado");
        }
        $produtos = Produto::orderBy('titulo')->get();
        return view('Admin.recursos.create', compact('produtos'));
    }

    public function store(Request $request)
    {
        if(Gate::denies('recursos.create')){
            abort(403, "Não Autorizado");
        }
        $data = $request->all();
        $recurso = new Recurso;
        $validator = Validator::make($data, $recurso->rules());
        if($validator->fails()){
            flash('Atente-se ao formulário')->warning();
            return back()->withInput()->withErrors($validator);
        }

        $response = $recurso->newInfo($data);
        if($response){
            flash('Salvo com sucesso!')->success();
            return redirect()->route('recursos.index');
        }
    }

    public function edit($id)
    {
        if(Gate::denies('recursos.edit')){
            abort(403, "Não Autorizado");
        }
        $info = Recurso::find($id);
        if(!isset($info)){
            flash('Item não existe no sistema!')->warning();
            return back();
        }
        $produtos = Produto::orderBy('titulo')->get();
        return view('Admin.recursos.edit', compact('info', 'produtos'));
    }

    public function update(Request $request, $id)
    {
        if(Gate::denies('recursos.edit')){
            abort(403, "Não Autorizado");
        }
        $recurso = Recurso::find($id);
        if(!isset($recurso)){
            flash('Item não existe no sistema!')->warning();
            return back();
        }
        $data = $request->all();
        
        $validator = Validator::make($data, $recurso->rules());
        if($validator->fails()){
            flash('Atente-se ao formulário')->warning();
            return back()->withInput()->withErrors($validator);
        }
        
        $response = $recurso->updateInfo($data);
        if($response){
            flash('Item atualizado com sucesso!')->success();
            return redirect()->route('recursos.index');
        }
    }

    public function delete($id)
    {
        if(Gate::denies('recursos.delete')){
            abort(403, "Não Autorizado");
        }
        $recurso = Recurso::find($id);
        if(!isset($recurso)){
            flash('Item não existe no sistema!')->warning();
            return back();
        }

        $recurso->delete();
        flash('Item deletado com sucesso!')->success();
        return back();
    }

}
