<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContatoRequest;
use App\Models\Contato;
use Exception;
use App\Models\Config;
use App\Mail\ContatoMail;
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

        try {

            $contato = new Contato($data);
            $contato->save();
            flash('Mensagem enviada com sucesso. Em breve entraremos em contato!')->success();
            return redirect()->back();

        } catch (Exception $e) {
            flash('Ocorreu um erro ao enviar a mensagem')->error();
            return redirect()->back();
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
