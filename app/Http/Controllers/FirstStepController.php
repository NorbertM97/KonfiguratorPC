<?php

namespace App\Http\Controllers;

use App\Compability;
use App\Cover;
use App\Producent;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use Illuminate\Database\Eloquent\Builder;
use Cart;


class FirstStepController extends Controller
{

    public function __construct()
    {
        
    }

    public function goToFirstStep(Request $request){

        
        $covers = Cover::with('producent','compability');
                        
        if($request->input('producent'))
        {
            $producent = $request->input('producent');

            $covers->whereHas('producent', function (Builder $query) use($producent) {
                $query->whereIn('name', $producent);
            });

        }

        if($request->input('compability'))
        {
            $compability = $request->input('compability');
            $covers->whereHas('compability', function (Builder $query) use($compability) {
                $query->whereIn('name', $compability);
            });
        }
        
        if($request->input('GPU_size'))
        {
            $GPU_size = $request->input('GPU_size');
            $covers->whereHas('compability', function (Builder $query) use($GPU_size) {
                $query->whereIn('GPU_size', $GPU_size);
            });
        }

        $covers = $covers->get();
        $covers->toArray();
        $producents = $this->getProducents();
        $compabilities = $this->getCompabilities();
        $sizes = $this->getSizes()->sortBy('GPU_size');
        $types = $this->getTypes();
       




        return view('firststep')->with(compact('covers', 'producents', 'compabilities', 'sizes', 'types'));
    }


//    metoda zwracająca producentów obudów
    private function getProducents(){
        // dd(Cover::getAllProducents());
            return Cover::getAllProducents();
    }

    private function getCompabilities(){
        return Compability::all();
    }

    private function getSizes(){

        return DB::table('covers')->select('GPU_size')->distinct()->get();
    }

    private function getTypes(){
        return DB::table('covers')->select('type')->distinct()->get();
    }

}
