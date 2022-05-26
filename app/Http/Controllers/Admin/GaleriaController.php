<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\GaleriaRequest;
use App\Models\Galeria;
use App\Models\Produto;
use Illuminate\Http\Request;

class GaleriaController extends Controller
{
    public function byProduto($id)
    {
        $produto = Produto::find($id);
        if(!isset($produto)){
            flash('Produto não encontrado no sistema!')->warning();
            return back();
        }
        $imagens = Galeria::where('produto_id', $id)->get();
        return view('Admin.medias.byProduto', compact('produto', 'imagens'));
    }
    
    public function UpdateByProduto(GaleriaRequest $request, $id)
    {
        $produto = Produto::find($id);
        if(!isset($produto)){
            flash('Produto não encontrado no sistema!')->warning();
            return back();
        }
        
        $data = $request->all();
        $count = 0;
        $error = 0;
        $media = new Galeria;
        foreach($data['arquivos'] as $arquivo){
            $info = [
                "arquivo"       =>  $arquivo,
                "produto_id"    =>  $id,
            ];
            
            
            $response = $media->newInfo($info, $produto, $count);
            if($response) {
                $count ++;
            } else {
                $error ++;
            }
        }
        if($count > 0){
            flash("Foi realizado o upload de $count arquivos")->success();
        }
        
        if($error > 0){
            flash("Houve $error com problemas ao realizar o upload")->warning();
        }
        return back();
        
    }

    public function DeleteByProduto($id)
    {
        $imagem = Galeria::find($id);
        $response = $imagem->deleteInfo();
        if($response){
            flash('Imagem removida com sucesso!')->success();
            return back();
        }
    }
}
