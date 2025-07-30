<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GaleriaRequest;
use App\Models\Galeria;
use App\Models\Produto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;

class GaleriaController extends Controller
{
    public function index()
    {
        if(Gate::denies('galeria.index')){
            abort(403, "Não Autorizado");
        }
        $imagens = Galeria::get();
        return view('Admin.galeria.index', compact('imagens'));
    }
    
    public function create()
    {
        if(Gate::denies('galeria.create')){
            abort(403, "Não Autorizado");
        }
        return view('Admin.galeria.create');
    }
    
    public function store(Request $request)
    {
        if(Gate::denies('galeria.create')){
            abort(403, "Não Autorizado");
        }
        $data = $request->all();
        $foto = new Galeria;
        $request = $foto->newInfo($data);
        if($request){
            flash('Imagem carregada com sucesso!')->success();
            return redirect()->route('galeria.index');
        }
    }
    
    public function destroy(Galeria $galerium)
    {
        if(Gate::denies('galeria.delete')){
            abort(403, "Não Autorizado");
        }
        $response = $galerium->deleteInfo();
        if($response){
            flash('Imagem removida com sucesso!')->success();
            return back();
        }
    }
}
