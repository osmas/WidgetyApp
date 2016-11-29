<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\Client;
use App\Widgety\WidgetyAPI;

class WidgetyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
        $this->app->bind('widgety', function(){

            $client = new Client([
                'base_uri' => 'https://www.widgety.co.uk/api/',
                 ]);

             return new WidgetyAPI($client);

        });
        
       
    }
}
