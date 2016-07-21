<?php

namespace App\Api\V1\Providers;

use Illuminate\Support\ServiceProvider;

class FractalServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('League\Fractal\Manager', function($app) {
            $fractal = new \League\Fractal\Manager;

       
           $serializer = new \App\Api\V1\Serializers\NoDataArraySerializer;

            $fractal->setSerializer($serializer);

            return $fractal;
        });

        $this->app->bind('Dingo\Api\Transformer\Adapter\Fractal', function($app) {
            $fractal = $app->make('\League\Fractal\Manager');

            return new \Dingo\Api\Transformer\Adapter\Fractal($fractal);
        });
    }
}
