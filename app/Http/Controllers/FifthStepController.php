<?php

namespace App\Http\Controllers;

use App\Gpu;
use Illuminate\Http\Request;

class FifthStepController extends Controller
{
    public function goToFifthStep(){


        return view('fifthstep')->with(compact('gpus'));
    }
}
