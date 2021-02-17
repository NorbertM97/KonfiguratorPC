<?php

namespace App\Http\Controllers;

use App\Psu;
use Illuminate\Http\Request;

class SeventhStepController extends Controller
{
    public function goToSeventhStep(){


        return view('seventhstep')->with(compact('psus'));

    }
}
