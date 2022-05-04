<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContatoRequest;
use App\Models\Contato;
use Exception;
use App\Models\Config;
use App\Mail\ContatoMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContatoController extends Controller
{
    public function index()
    {

        // if(Gate::denies('mensagens')){
        //     abort(403, "Não Autorizado");
        // }
        $mensagens = Contato::orderBy('lido', 'desc')->orderBy('created_at', 'desc')->get();

        return view('Admin.mensagens.mensagens', compact('mensagens'));
    }

    public function store(ContatoRequest $request)
    {
        $data = $request->all();
        $contato = new Contato;
        $response = $contato->newInfo($data);
        if($response){
            flash('Mensagem enviada com sucesso!')->success();
            return back();
        } else {
            flash('Erro ao enviar a mensagem, tente novamente')->warning();
            return back();
        }

    }

    public function update(Request $request)
    {

        // if (Gate::denies('categorias.index')) {
        //     abort(403, "Não Autorizado");
        // }
        $data = $request->all();
        $contato = Contato::find($data['id']); 
        if(isset($contato)){ 
        
            $contato->update($data); 
            flash('Mensagem marcada como lida');
            return redirect()->back(); 

        } else { 
            flash('Ocorreu um erro ao atualizar o status')->error();
            return redirect()->back(); 
        }

    }

}
