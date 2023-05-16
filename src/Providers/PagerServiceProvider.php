<?php

namespace Mosco\Pager\Providers;

use Illuminate\Support\ServiceProvider;

class PagerServiceProvider extends ServiceProvider{
    
    /**
     * Bootstrap the application services.
     * 
     * @return void
     *  **/

    public function boot()
    {
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations/');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'pager');
    }

    /**
     * register the application services.
     * 
     * @return void
     *  **/

     public function register()
     {
        
     }
}