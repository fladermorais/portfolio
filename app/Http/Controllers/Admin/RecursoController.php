<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\RecursoRequest;
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
        $dicas = Recurso::orderBy('titulo')->get();
        return view('Admin.dicas.index', compact('dicas'));
    }

    public function create()
    {
        if(Gate::denies('recursos.create')){
            abort(403, "Não Autorizado");
        }
        $produtos = Produto::orderBy('titulo')->get();
        return view('Admin.dicas.create', compact('produtos'));
    }

    public function store(RecursoRequest $request)
    {
        if(Gate::denies('recursos.create')){
            abort(403, "Não Autorizado");
        }
        $data = $request->all();
        $recurso = new Recurso;

        $response = $recurso->newInfo($data);
        if($response){
            flash('Salvo com sucesso!')->success();
            return redirect()->route('dicas.index');
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
        return view('Admin.dicas.edit', compact('info', 'produtos'));
    }

    public function update(RecursoRequest $request, $id)
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
        
        $response = $recurso->updateInfo($data);
        if($response){
            flash('Item atualizado com sucesso!')->success();
            return redirect()->route('dicas.index');
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
