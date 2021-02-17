<?php

namespace App\Http\Controllers;

use App\Compability;
use App\Cover;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use Illuminate\Validation\Rules\In;

class FilterController extends Controller
{


    public function coverFilter(Request $request){

        $covers = array();


        $producents = json_decode($request->input('producents'));
        $compabilities = json_decode($request->input('compabilities'));
        $sizes = json_decode($request->input('sizes'));
        $types = json_decode($request->input('types'));



        $filters = array();

        array_push($filters, Input::get('producent'), Input::get('compability'), Input::get('size'), Input::get('type'));

        $filterProducents = array();
        $filterCompabilities = array();
        foreach ($filters[0] as $producents ){
            array_push($filterProducents, json_decode($producents));
        }

        foreach ($filters[1] as $compabilities ){
            array_push($filterCompabilities, json_decode($compabilities));
        }



        dd($covers);




        return view('firststep')->with(compact('covers','producents', 'compabilities', 'sizes', 'types'));
    }




}
