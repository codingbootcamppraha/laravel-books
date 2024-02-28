<?php

namespace App\Providers;

use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        //
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        Gate::define('owner', function($user) {

            // if (in_array($user->id, [
            //     1,
            //     13,
            //     345
            // ])) {
            //     return true;
            // } else {
            //     return false;
            // }

            return substr($user->email, -11) === '@onmyway.cz';

        });

        Gate::define('admin', function($user) {
            return $user->role === 'admin';
        });

        Gate::define('role', function($user, $role) {
            return $user->role === $role;
        });
    }
}
