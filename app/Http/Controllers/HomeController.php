<?php

namespace App\Http\Controllers;

use App\Model\Canhoto;
use App\Model\Role;
use App\Models\Categoria;
use App\Models\Noticia;
use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
    * Create a new controller instance.
    *
    * @return void
    */
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */
    // public function index()
    // {   
    //     return view('welcome');
    // }

    public function logado()
    {
        $categorias = Categoria::count();
        $noticias   = Noticia::count();
        return view('home', compact('categorias', 'noticias'));
    }
}
