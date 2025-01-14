<?php

namespace Saidul44\FirstPackage;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class FirstPackageServiceProvider extends ServiceProvider
{

    protected $namespace = 'Saidul44\FirstPackage\Http\Controllers';
    /**
     * Register services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
    }
}
