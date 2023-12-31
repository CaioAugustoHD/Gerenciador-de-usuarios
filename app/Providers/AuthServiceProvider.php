<?php

namespace App\Providers;

// use Illuminate\Support\Facades\Gate;

use App\Models\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

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
        Gate::before(function (User $user, string $permission) {
            return $this->hasPermision($user, $permission);
        });
    }

    private function hasPermision(User $user, string $permission)
    {
        $role = $user->role;
        $permissionsRole =  config("permissions.roles.$role.permissions", []);

        return in_array($permission, $permissionsRole);
    }
}
