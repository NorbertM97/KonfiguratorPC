<?php

namespace App\Http\Controllers;

use App\Motherboard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SecondStepController extends Controller
{
    public function goToSecondStep(){

        $cover = Session::get('cart')['cover'];

        dd($cover);

        $mbs = Motherboard::all();

        return view('secondstep')->with(compact('mbs'));
    }

}
