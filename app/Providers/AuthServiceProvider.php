<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
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

        Gate::define('be-vendor-admin', function ($user) {
            return $user->hasAnyRoles(['admin', 'vendor']);
        });
        Gate::define('be-admin', function ($user) {
            return $user->hasRole('admin');
        });
        Gate::define('be-vendor', function ($user) {
            return $user->hasRole('vendor');
        });
        Gate::define('be-user', function ($user) {
            return $user->hasRole('user');
        });

        //
    }
}
