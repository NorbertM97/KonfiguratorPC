<?php

namespace App\Http\Controllers;

use App\Hdd;
use Illuminate\Http\Request;

class SixthStepController extends Controller
{
    public function GoToSixthStep(){


        return view('sixthstep')->with(compact('hdds'));

    }
}
