<?php

namespace App\Providers;

use App\Models\User;
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
        if (config('app.env') === 'abc') {
            Gate::define('viewPulse', function (User $user) {
                return in_array($user->email, [
                    env('APP_ADMIN_ACCOUNT')
                ]);
            });
        }else{ // This is not compleeted
            $this->registerPolicies();

            Gate::define('viewDashboard', function (User $user) {
                return $user->type === 'admin';
            });
    
            Gate::define('viewHorizon', function (User $user) {
                return $user->type === 'admin';
            });
    
            Gate::define('viewTelescope', function (User $user) {
                return $user->type === 'admin';
            });
    
            Gate::define('viewPulse', function (User $user) {
                return $user->type === 'admin';
            });
        }
    }
}
