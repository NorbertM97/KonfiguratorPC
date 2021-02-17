<?php

namespace App\Providers;

use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;
use Illuminate\View\View;


class AppServiceProvider extends ServiceProvider
{


    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot() {


        $cart = array('cover'=> null, 'motherboard' => null, 'cpu' => null,  'ram' => null, 'gpu' => null, 'hdd' => null, 'psu' => null);

        Session::put('cart', $cart);



    }
}
