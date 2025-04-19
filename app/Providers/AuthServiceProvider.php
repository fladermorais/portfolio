<?php

namespace App\Providers;

// use App\Model\Permission;
use App\Models\Permission;
use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AuthServiceProvider extends ServiceProvider
{
    /**
    * The policy mappings for the application.
    *
    * @var array
    */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];
    
    /**
    * Register any authentication / authorization services.
    *
    * @return void
    */
    public function boot()
    {
        $this->registerPolicies();
        if(Schema::hasTable('permissions')){
            if($this->listPermissions()){
                foreach($this->listPermissions() as $permission) {
                    Gate::define($permission->name, function($user) use($permission) {
                        
                        return $user->haveRole($permission->roles) || $user->isAdmin();
                    });
                }
            }
        }
    }
    
    public function listPermissions()
    {
        $permissions = Permission::with('roles')->get();
        return $permissions;
    }
}
