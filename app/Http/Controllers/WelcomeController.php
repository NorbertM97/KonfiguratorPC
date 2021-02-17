<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\View;
use Cart;


class WelcomeController extends Controller
{



    public function __construct()
    {
        Cart::destroy();

    }

    public function goToWelcome(){


        return view('welcome');
    }

}
