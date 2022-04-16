<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\TituloRequest;
use App\Models\Titulo;

class TituloController extends Controller
{
    public function index()
    {

        $titulos = Titulo::orderBy('titulo')->get();

        return view('Admin.titulos.index', compact('titulos'));
    }

    public function create()
    {
        return view('Admin.titulos.create');
    }

    public function store(TituloRequest $request)
    {

        $data = $request->all();
        try {
            $titulo = new Titulo($data);
            $titulo->save();
            flash('Título cadastrado com sucesso')->success();
            return redirect()->back();

        } catch (Exception $e) {
            flash('Ocorreu um erro ao cadastrar o título')->error();
            return redirect()->back();
        }
    }

    public function edit($id)
    {
        $titulo = Titulo::find($id);

        if (isset($titulo)) {
            return view('Admin.titulos.edit', compact('titulo'));
        } else {
            flash('Título não encontrado')->error();
            return redirect()->back();
        }

    }

    public function update(TituloRequest $request, $id)
    {
        $data = $request->all();

        $titulo = Titulo::find($id);

        if (isset($titulo)) {
            try {
                $titulo->update($data);
                flash('Titulo atualizado com sucesso')->success();
                return redirect()->back();
            } catch (Exception $e) {
                flash('Ocorreu um erro ao atualizar o título')->error();
                return redirect()->back();
            }
        } else {
            flash('Título não encontrado')->error();
            return redirect()->back();
        }
    }

    public function delete($id)
    {
        $titulo = Titulo::find($id);

        if (isset($titulo)) {
            try {
                $titulo->delete();
                flash('Título excluído com sucesso')->success();
                return redirect()->back();
            } catch (Exception $e) {
                flash('Ocorreu um erro ao excluir o título')->error();
                return redirect()->back();
            }
        } else {
            flash('Título não encontrado')->error();
        }

    }
}
