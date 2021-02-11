<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    #NEW
    protected $namespace_BAK    = 'App\Http\Controllers\Dashboard_admin';
    protected $namespace_FRONT1 = 'App\Http\Controllers\Front_one';
    protected $namespace_FRONT2 = 'App\Http\Controllers\Front_tow';

    /**
     * The path to the "home" route for your application.
     *
     * @var string
     */
    public const HOME = '/home';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        $this->mapApiRoutes();

        $this->mapWebRoutes();
        #NEW
        $this->mapBakRoutes();
        $this->mapFront1Routes();
        $this->mapFront2Routes();

    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace)
             ->group(base_path('routes/web.php'));
    }
    #NEW
    protected function mapBakRoutes()
    {
        Route::middleware('web')
             ->namespace($this->namespace_BAK)
             ->group(base_path('routes/back_route/web.php'));
    }
    protected function mapFront1Routes()
    {
        Route::middleware('web')
             ->namespace($this->namespace_FRONT1)
             ->group(base_path('routes/front1_route/web.php'));
    }
    protected function mapFront2Routes()
    {
        Route::middleware('web')
             ->namespace($this->namespace_FRONT2)
             ->group(base_path('routes/front2_route/web.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::prefix('api')
             ->middleware('api')
             ->namespace($this->namespace)
             ->group(base_path('routes/api.php'));
    }
}
