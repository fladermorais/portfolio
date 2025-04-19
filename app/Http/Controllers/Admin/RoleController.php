<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\Permission;

class RoleController extends Controller
{
    public function index()
    {
        $roles = Role::all();
        return view('Admin.roles.index', compact('roles'));
    }

    public function create()
    {
        return view('Admin.roles.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $role = new Role();
        $role->create($data);
        flash("Cargo criado com sucesso")->success();
        return redirect()->route("roles.index");
    }

    public function edit($id)
    {
        $role = Role::find($id);
        if(!isset($role)){
            flash("Cargo não existe no sistema")->error();
            return redirect()->route('roles.index');
        }
        return view('Admin.roles.edit', compact('role'));
    }

    public function update (Request $request, $id)
    {
        $role = Role::find($id);
        if(!isset($role)){
            flash("Cargo não existe no sistema")->error();
            return redirect()->route('roles.index');
        }
        $data = $request->all();
        $role->update($data);
        flash("Cargo atualizado com sucesso no sistema")->success();
        return redirect()->route('roles.index');
    }


    // Funções
    public function permission($role)
    {
        $role = Role::find($role);
        $permissions = Permission::all();
        return view('Admin.roles.permissions', compact('role', 'permissions'));
    }

    public function permissionStore(Request $request, $role)
    {
        $role = Role::find($role);
        $permission = Permission::find($request['permission_id']);
        $role->addPermission($permission);
        return redirect()->back();
    }

    public function permissionDelete($role, $permission)
    {
        $role = Role::find($role);
        $permission = Permission::find($permission);
        $role->removePermission($permission);
        return redirect()->back();
    }
}
