<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ClienteStoreRequest;
use App\Http\Requests\ClientesUpdateRequest;
use App\Models\Cliente;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class ClienteController extends Controller
{
    public function index()
    {
        if(Gate::denies('clientes.index')){
            abort(403, "Não Autorizado");
        }
        $clientes = Cliente::orderBy('status')->orderBy('nome')->get();
        return view('Admin.clientes.index', compact('clientes'));
    }

    public function create()
    {
        if(Gate::denies('clientes.create')){
            abort(403, "Não Autorizado");
        }
        return view('Admin.clientes.create');
    }

    public function store(ClienteStoreRequest $request)
    {
        if(Gate::denies('clientes.create')){
            abort(403, "Não Autorizado");
        }
        $data = $request->all();
        $cliente = new Cliente;

        $response = $cliente->newInfo($data);
        if($response){
            flash('Item salvo com sucesso!')->success();
            return redirect()->route('clientes.index');
        }
    }

    public function edit($id)
    {
        if(Gate::denies('clientes.edit')){
            abort(403, "Não Autorizado");
        }
        $info = Cliente::find($id);
        if(!isset($info)){
            flash('Item não existe no sistema!')->warning();
            return back();
        }

        return view('Admin.clientes.edit', compact('info'));
    }

    public function update(ClientesUpdateRequest $request, $id)
    {
        if(Gate::denies('clientes.edit')){
            abort(403, "Não Autorizado");
        }
        $cliente = Cliente::find($id);
        if(!isset($cliente)){
            flash('Item não existe no sistema!')->warning();
            return back();
        }

        $data = $request->all();

        $response = $cliente->updateInfo($data);

        if($response){
            flash('Item atualizado com sucesso!')->success();
            return redirect()->route('clientes.index');
        } else {
            flash('Nenhum mudança realizada')->warning();
            return redirect()->route('clientes.index');
        }
    }

    public function delete($id)
    {
        if(Gate::denies('clientes.delete')){
            abort(403, "Não Autorizado");
        }
        $cliente = Cliente::find($id);
        if(!isset($cliente)){
            flash('Item não existe no sistema!')->warning();
            return back();
        }

        $response = $cliente->deleteInfo();
        if($response){
            flash('Item removido com sucesso')->success();
            return back();
        }
    }
}
