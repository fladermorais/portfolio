<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::orderBy('nome')->get();
        return view('Admin.menus.index', compact('menus'));
    }

    public function edit(Menu $menu)
    {
        return view('Admin.menus.edit', compact('menu'));
    }

    public function update(Request $request, Menu $menu)
    {
        if(!isset($menu)){
            flash('Menu não encontrado no sistema!')->warning();
            return back();
        }

        $data = $request->all();

        $response = $menu->updateInfo($data);
        if($response){
            flash('Menu atualizado com sucewso!')->success();
            return redirect()->route('menus.index');
        }
    }
}