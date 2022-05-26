<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Redes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class RedesController extends Controller
{
    public function index()
    {
        if(Gate::denies('redes.index')){
            abort(403, "Não Autorizado");
        }
        $redes = Redes::orderBy('titulo', 'asc')->get();
        return view('Admin.redes.index', compact('redes'));
    }
    
    public function create()
    {
        if(Gate::denies('redes.create')){
            abort(403, "Não Autorizado");
        }
        $total = Redes::count();
        if($total >= 5){
            flash('O máximo de informações permitidas são 5, infelizmente não é possível criar outra informação.')->warning();
            return redirect()->back();
        }
        $rede = new Redes;
        $icones = $rede->getIcons();
        return view('Admin.redes.create', compact('icones'));
    }
    
    public function store(Request $request)
    {
        if(Gate::denies('redes.create')){
            abort(403, "Não Autorizado");
        }
        $rede = new Redes;
        $data = $request->all();
        $validator = Validator::make($data, $rede->rules());
        if($validator->fails()){
            flash('Atente-se ao formulário, alguns itens são de preenchimento obrigatório')->warning();
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $resposta = $rede->newInfo($data);
        if($resposta){
            flash('REde social cadastrada com sucesso!')->success();
            return redirect()->route('redes.index');
        } else{ 
            flash('Erro ao cadastrar rede social')->warning();
            return redirect()->back();
        }
    }
    
    public function edit($id)
    {
        if(Gate::denies('redes.edit')){
            abort(403, "Não Autorizado");
        }
        $rede = Redes::find($id);
        if(!isset($rede)){
            flash('Rede social não encontrada no sistema!')->success();
            return redirect()->back();
        }
        $icones = $rede->getIcons();
        return view('Admin.redes.edit', compact('rede', 'icones'));
    }
    
    public function update(Request $request, $id)
    {
        if(Gate::denies('redes.edit')){
            abort(403, "Não Autorizado");
        }
        $rede = Redes::find($id);
        if(!isset($rede)){
            flash('Rede social não encontrada no sistema!')->success();
            return redirect()->back();
        }
        $data = $request->all();
        $validator = Validator::make($data, $rede->rules());
        if($validator->fails()){
            flash('Atente-se ao formulário, alguns itens são de preenchimento obrigatório')->warning();
            return redirect()->back()->withInput()->withErrors($validator);
        }
        $resposta = $rede->updateInfo($data);
        if($resposta){
            flash('Rede social atualizada com sucesso!')->success();
            return redirect()->route('redes.index');
        } else {
            flash('Erro ao atualizar a rede social, tente novamente')->warning();
        }
    }
    
    public function delete($id)
    {
        if(Gate::denies('redes.delete')){
            abort(403, "Não Autorizado");
        }
        $rede = Redes::find($id);
        if(!isset($rede)){
            flash('Rede social não encontrada no sistema!')->success();
            return redirect()->back();
        }
        $rede->delete();
        flash('Rede social removida com sucesso!')->success();
        return redirect()->back();
    }
}
