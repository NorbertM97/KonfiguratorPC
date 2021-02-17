<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LastStepController extends Controller
{
    public function goToLastStep(){
        return view('laststep');
    }
}
