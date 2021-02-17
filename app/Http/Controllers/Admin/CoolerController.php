<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Psu;

class CoolerController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $coolers = Psu::getAll();

        return view('admin.cooler.index', compact('coolers'));
    }
    public function getAdd()
    {
        $producents = Psu::getAllProducents();

        return view('admin.cooler.form', compact('producents'));
    }

    public function postAdd(Request $request)
    {
        // dd($request->all());
        $Psu = new Psu;
        $Psu->fill($request->all());

        if($request->hasfile('zdj'))
        {
            $name = $request->zdj->getClientOriginalName();
            $request->zdj->move('images/PSU', $name);
            $Psu->zdj = '../images/PSU/'.$name;
        }
        $Psu->save();

        $request->session()->flash('status', 'Zasilacz został dodany!');

        return redirect()->route('adminCooler');
    }

    public function postDelete(Request $request)
    {
        if($request->id)
        {
            Psu::find($request->id)->delete();
            $request->session()->flash('status', 'Zasilacz został usunięty!');
            return redirect()->back();
        }

        $request->session()->flash('status', 'Coś poszło nie tak, spróbuj ponowanie!');
        return redirect()->back();
    }
}
