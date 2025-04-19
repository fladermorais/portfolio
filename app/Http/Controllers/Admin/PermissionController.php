<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Permission;

class PermissionController extends Controller
{
    public function index()
    {
        $permissions = Permission::all();
        return view('Admin.permissions.index', compact('permissions'));
    }

    public function create()
    {
        return view('Admin.permissions.create');
    }

    public function store(Request $request)
    {
        $data = $request->all();
        $permission = new Permission();
        $permission->create($data);
        flash("Permissão criado com sucesso")->success();
        return redirect()->route("permissions.index");
    }

    public function edit($id)
    {
        $permission = Permission::find($id);
        if(!isset($permission)){
            flash("Permissão não existe no sistema")->error();
            return redirect()->route('permissions.index');
        }
        return view('Admin.permissions.edit', compact('permission'));
    }

    public function update (Request $request, $id)
    {
        $permission = Permission::find($id);
        if(!isset($permission)){
            flash("Permissão não existe no sistema")->error();
            return redirect()->route('permissions.index');
        }
        $data = $request->all();
        $permission->update($data);
        flash("Permissão atualizado com sucesso no sistema")->success();
        return redirect()->route('permissions.index');
    }
}
