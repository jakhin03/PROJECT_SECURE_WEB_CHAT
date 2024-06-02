<?php

namespace App\Providers;

use Illuminate\Cache\RateLimiting\Limit;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * The path to your application's "home" route.
     *
     * Typically, users are redirected here after authentication.
     *
     * @var string
     */
    public const HOME = '/dashboard';

    /**
     * Define your route model bindings, pattern filters, and other route configuration.
     */
    public function boot(): void
    {
        $this->configureRateLimiting();

        $this->routes(function () {
            Route::middleware('api')
                ->prefix('api')
                ->group(base_path('routes/api.php'));

            Route::middleware('web')
                ->group(base_path('routes/web.php'));
        });
    }

    
    /**
     * BLock endpoint /login when > 500 req/min, 5req/min/IP, 5req/min/username
     */
    protected function configureRateLimiting():void{
        RateLimiter::for('global', function (Request $request) {
            return [
                Limit::perMinute(1000)->by($request->ip()),
            ];
        });
        RateLimiter::for('login', function(Request $request){
            return [
                Limit::perMinute(500),
                // Limit::perMinute(5)->by($request->ip()),
                Limit::perMinute(5)->by($request->input('username')),
            ];                
        });
        RateLimiter::for('register', function (Request $request) {
            return [
                Limit::perMinute(100),
                Limit::perMinute(5)->by($request->ip()),
                Limit::perMinute(5)->by($request->input('email')),
            ];
        });
        RateLimiter::for('reset-password', function (Request $request) {
            return [
                Limit::perMinute(50),
                Limit::perMinute(5)->by($request->ip()),
                Limit::perMinute(5)->by($request->input('email')),
            ];
        });

    }
}
