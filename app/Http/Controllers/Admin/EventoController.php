<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\EventoRequest;
use App\Models\Evento;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class EventoController extends Controller
{
    public function index()
    {
        if(Gate::denies('eventos.index')){
            abort(403, "Não Autorizado");
        }
        $eventos = Evento::orderBy('status', 'asc')->orderBy('dia', 'asc')->get();
        return view('Admin.eventos.index', compact('eventos'));
    }
    
    public function create()
    {
        if(Gate::denies('eventos.create')){
            abort(403, "Não Autorizado");
        }
        return view('Admin.eventos.create');
    }
    
    public function store(EventoRequest $request)
    {
        if(Gate::denies('eventos.create')){
            abort(403, "Não Autorizado");
        }
        $data = $request->all();
        
        $evento = new Evento;
        
        $response = $evento->newInfo($data);
        if($response){
            flash('Evento Criado com sucesso')->success();
            return redirect()->route('eventos.index');
        }
    }
    
    public function edit($id)
    {
        if(Gate::denies('eventos.edit')){
            abort(403, "Não Autorizado");
        }
        $info = Evento::find($id);
        if(!isset($info)){
            flash('Evento não ewxiste no sistema!')->warning();
            return back();
        }
        
        return view('Admin.eventos.edit', compact('info'));
    }
    
    public function update(EventoRequest $request, $id)
    {
        if(Gate::denies('eventos.edit')){
            abort(403, "Não Autorizado");
        }
        $info = Evento::find($id);
        if(!isset($info)){
            flash('Evento não ewxiste no sistema!')->warning();
            return back();
        }
        $data = $request->all();
        
        $response = $info->updateInfo($data);
        if($response){
            flash('Evento Criado com sucesso')->success();
            return redirect()->route('eventos.index');
        }
    }
    
    public function destroy($id)
    {
        if(Gate::denies('eventos.delete')){
            abort(403, "Não Autorizado");
        }
        $info = Evento::find($id);
        if(!isset($info)){
            flash('Evento não ewxiste no sistema!')->warning();
            return back();
        }
        $info->delete();
        return redirect()->route('eventos.index');
    }
}