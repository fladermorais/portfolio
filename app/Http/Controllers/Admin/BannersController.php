<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\BannerStoreRequest;
use App\Http\Requests\BannerUpdateRequest;
use App\Models\Banner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;

class BannersController extends Controller
{
    public function index()
    {
        if(Gate::denies('banners.index')){
            abort(403, "Não Autorizado");
        }
        $banners = Banner::orderBy('nome')->get();
        return view('Admin.banners.index', compact('banners'));
    }

    public function create()
    {
        if(Gate::denies('banners.create')){
            abort(403, "Não Autorizado");
        }
        return view('Admin.banners.create');
    }

    public function store(BannerStoreRequest $request)
    {
        if(Gate::denies('banners.create')){
            abort(403, "Não Autorizado");
        }
        $data = $request->all();
        $cliente = new Banner;

        $response = $cliente->newInfo($data);
        if($response){
            flash('Item salvo com sucesso!')->success();
            return redirect()->route('banners.index');
        }
    }

    public function edit($id)
    {
        if(Gate::denies('banners.edit')){
            abort(403, "Não Autorizado");
        }
        $info = Banner::find($id);
        if(!isset($info)){
            flash('Item não existe no sistema!')->warning();
            return back();
        }

        return view('Admin.banners.edit', compact('info'));
    }

    public function update(BannerUpdateRequest $request, $id)
    {
        if(Gate::denies('banners.edit')){
            abort(403, "Não Autorizado");
        }
        $cliente = Banner::find($id);
        if(!isset($cliente)){
            flash('Item não existe no sistema!')->warning();
            return back();
        }

        $data = $request->all();

        $response = $cliente->updateInfo($data);

        if($response){
            flash('Item atualizado com sucesso!')->success();
            return redirect()->route('banners.index');
        } else {
            flash('Nenhum mudança realizada')->warning();
            return redirect()->route('banners.index');
        }
    }

    public function delete($id)
    {
        if(Gate::denies('banners.delete')){
            abort(403, "Não Autorizado");
        }
        $cliente = Banner::find($id);
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
