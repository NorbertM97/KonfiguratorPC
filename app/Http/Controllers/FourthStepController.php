<?php

namespace App\Http\Controllers;

use App\Ram;
use Illuminate\Http\Request;

class FourthStepController extends Controller
{
    public function goToFourthStep(){


        return view('fourthstep')->with(compact('rams'));
    }
}
