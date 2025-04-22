<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\QuemSomosRequest;
use App\Models\QuemSomos;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class QuemSomosController extends Controller
{
    public function index()
    {
        $infos = QuemSomos::orderBy('titulo')->get();
        return view('Admin.quemsomos.index', compact('infos'));
    }
    
    public function create()
    {
        return view('Admin.quemsomos.create');
    }
    
    public function store(QuemSomosRequest $request)
    {
        $data = $request->all();
        $info = new QuemSomos;
        
        $response = $info->newInfo($data);
        if($response){
            flash('ItEm salvo com sucesso')->success();
            return redirect()->route('quemsomos.index');
        }
    }
    
    public function edit($id)
    {
        $info = QuemSomos::find($id);
        if(!isset($info)){
            flash('Item não existe no sistema!')->warning();
            return back();
        }
        return view('Admin.quemsomos.edit', compact('info'));
    }
    
    public function update(QuemSomosRequest $request, $id)
    {
        $info = QuemSomos::find($id);
        if(!isset($info)){
            flash('Item não existe no sistema!')->warning();
            return back();
        }
        $data = $request->all();
        $response = $info->updateInfo($data);
        if($response){
            flash('Itam atualizado com sucesso')->success();
            return redirect()->route('quemsomos.index');
        }
    }
}