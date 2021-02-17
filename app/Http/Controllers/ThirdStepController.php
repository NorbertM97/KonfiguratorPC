<?php

namespace App\Http\Controllers;

use App\Cpu;
use Illuminate\Http\Request;

class ThirdStepController extends Controller
{
    public function goToThirdStep(){


        return view('thirdstep')->with(compact('cpus'));
    }
}
