<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;
use App\User;
use App\Role;

class UserController extends Controller
{
    public function index()
    {
        if(Gate::denies('usuarios.index')){
            abort(403, "Não Autorizado");
        }
        
        $users = User::orderBy('name', 'asc')->get();
        
        $usersDeletados = User::onlyTrashed('name', 'asc')->get();
        return view('Admin.user.index', compact('users', 'usersDeletados'));
    }
    
    public function create()
    {
        if(Gate::denies('usuarios.create')){
            abort(403, "Não Autorizado");
        }
        return view('Admin.user.create');
    }
    
    public function store(Request $request)
    {
        if(Gate::denies('usuarios.create')){
            abort(403, "Não Autorizado");
        }
        $data = $request->all();
        $user = new User;
        
        $validator = Validator::make($data, $user->rules());
        if($validator->fails()){
            return redirect()->route('usuarios.create')
            ->withErrors($validator)
            ->withInput();
        }
        
        $response = $user->newInfo($data);
        if($response){       
            flash('Usuário Criado com sucesso')->success();
            return redirect()->route('usuarios.index');
        }
    }
    
    public function edit($id)
    {
        if(Gate::denies('usuarios.edit')){
            abort(403, "Não Autorizado");
        }
        $user = User::find($id);
        if(isset($user)){
            if(auth()->user()->id == $id || auth()->user()->isAdmin()){
                return view('Admin.user.edit', compact('user'));
            } else {
                flash('Ação não permitida')->important();
                return redirect()->route('usuarios.index');
            }
        }
    }
    
    public function update(Request $request, $id)
    {
        if(Gate::denies('usuarios.edit')){
            abort(403, "Não Autorizado");
        }
        $data = $request->all();
        $user = User::find($id);
        
        $validator = Validator::make($data, $user->rulesUpdate($data));
        if($validator->fails()){
            return back()
            ->withErrors($validator)
            ->withInput();
        }
        $response = $user->updateInfo($data);
        if($response){
            flash("Usuário Atualizado com sucesso!")->success();
            return redirect()->route('usuarios.index');
        }
    }
    
    public function delete($id)
    {
        if(Gate::denies('usuarios.delete')){
            abort(403, "Não Autorizado");
        }
        $user = User::find($id);
        if(isset($user->id)){
            if(auth()->user()->id == $id){
                flash('Não é permitido excluir o próprio usuário')->error();
                return redirect()->route('usuarios.index');
            } else {
                $response = $user->deleteInfo();
                flash('Usuário Excluido com sucesso')->success();
                return redirect()->route('usuarios.index');
            }
        } else {
            flash("Usuário não existe no sistema")->error();
            return redirect()->route('usuarios.index');
        }
    }
    
    public function active($id)
    {
        $user = User::withTrashed()->find($id);
        if(isset($user)){
            $user->restore();
            flash("Usuário Ativado")->success();
            return redirect()->route("usuarios.index");
        } else {
            flash("Usuário não encontrado no sistema")->error();
            return redirect()->route("usuarios.index");
        }
    }
    
    
    
    // Rotas referente a Roles
    public function role($user){
        $user = User::find($user);
        $roles = Role::all();
        
        return view('Admin.user.role', compact('user', 'roles'));
    }
    
    public function roleStore(Request $request, $user)
    {
        $user = User::find($user);
        $role = Role::find($request['role_id']);
        $user->addRole($role);
        return redirect()->back();
    }
    public function roleDelete($user, $role)
    {
        $user = User::find($user);
        $role = Role::find($role);
        $user->removeRole($role);
        return redirect()->back();
    }
}
