<?php

namespace fundingportal\Sentiment;

use Illuminate\Support\ServiceProvider;

class SentimentServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
       //dd(__DIR__.'/routes/web.php');
        $this->loadRoutesFrom(__DIR__.'/routes/web.php');

        $this->app->bind('vaman',function(){
            return new Vaman();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
