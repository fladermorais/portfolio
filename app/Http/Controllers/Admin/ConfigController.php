<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Config;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class ConfigController extends Controller
{
    public function index()
    {
        if(Gate::denies('config.index')){
            abort(403, "Não Autorizado");
        }
        $config = Config::find(1);
        return view('Admin.config.index', compact('config'));
    }

    public function edit($id)
    {
        if(Gate::denies('config.edit')){
            abort(403, "Não Autorizado");
        }
        $info = Config::find($id);
        if(!isset($info)){
            flash('Informações não encontradas no sistema!')->warning();
            return redirect()->back();
        }
        return view('Admin.config.edit', compact('info'));
    }

    public function update(Request $request, $id)
    {
        if(Gate::denies('config.edit')){
            abort(403, "Não Autorizado");
        }
        $config = Config::find($id);
        if(!isset($config)){
            flash('Informações não encontradas no sistema!')->warning();
            return redirect()->back();
        }

        $data = $request->all();

       $validator = Validator::make($data, $config->rules());
       if($validator->fails()){
        flash('Atente-se ao formulário')->warning();
        return back()->withInput()->withErrors($validator);
       }
        
        $response = $config->updateInfo($data);
        
        if($response){
            flash('Informações atualizada com sucesso!')->success();
            return redirect()->route('configs.index');
        } else {
            flash('Nenhuma mudança realizada!')->warning();
            return redirect()->route('configs.index');
        }

    }
}
