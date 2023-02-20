<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;


class AuthServiceProvider extends ServiceProvider
{

    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // 'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        //
        Gate::before(function ($user, $ability) {
            return $user->hasRole('admin') ? true : null;

        });
             Permission::create(['name' => 'add favorite']);
             Permission::create(['name' => 'create quotes', 'edit quotes', 'update quotes', 'delete quotes']);
        
             Role::create(['name' => 'register'])->givePermissionTo('add favorite');
             Role::create(['name' => 'admin'])->givePermissionTo('create quotes', 'edit quotes', 'update quotes', 'delete quotes');
             User::find(1)->assignRole('admin'); 
    }
}
