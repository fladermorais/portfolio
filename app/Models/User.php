<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Validation\Rule;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;
    use SoftDeletes;
    
    protected $fillable = [
        'name', 'email', 'password'
    ];
    
    protected $hidden = [
        'password', 'remember_token',
    ];
    
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
    
    public function rules()
    {
        return [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed']
        ];
    }
    
    public function rulesUpdate($data)
    {
        if(isset($data['password'])){
            return [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->id)],
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ];
        } else {
            return [
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($this->id)],
            ];
        }
    }
    
    public function newInfo($data)
    {
        $data['password'] = bcrypt($data['password']);
        $info = $this->create($data);
        
        $editorRole = Role::where('name', 'Editor')->first();
        $info->roles()->attach($editorRole);
        
        return $info;
    }

    public function updateInfo($data)
    {
        $data['password'] = bcrypt($data['password']);
        $info = $this->update($data);
        return $info;
    }
    
    public function deleteInfo()
    {
        $this->delete();
        return true;
    }
    
    // Relacionamentos
    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }
    
    // Funçoes para criar, verificar e excluir permissões
    public function isAdmin()
    {
        return $this->existRole('Administrador');
    }
    
    public function addRole($role)
    {
        if(is_string($role)){
            $role = Role::where('name', '=', $role)->firstOrFail();
        }
        
        if($this->existRole($role)){
            return;
        }
        
        return $this->roles()->attach($role);
    }
    
    public function existRole($role)
    {
        if(is_string($role)){
            $role = Role::where('name', '=', $role)->firstOrFail();
        }
        
        if(is_integer($role)){
            $role = Role::where('id', $role)->firstOrFail();
        }
        
        return (boolean) $this->roles()->find($role->id);
    }
    
    public function removeRole($role)
    {
        if(is_string($role)){
            $role = Role::where('name', '=', $role)->firstOrFail();
        }
        if(is_integer($role)){
            $role = Role::where('id', $role)->firstOrFail();
        }
        
        return $this->roles()->detach($role);
    }
    
    public function haveRole($roles)
    {
        $userCharges = $this->roles;        
        return $roles->intersect($userCharges)->count();
    }
}