<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Ram;

class RamController extends Controller
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
        $rams = Ram::getAll();
        return view('admin.ram.index', compact('rams'));
    }
    public function getAdd()
    {
        $producents = Ram::getAllProducents();
        return view('admin.ram.form', compact('producents'));
    }

    public function postAdd(Request $request)
    {

        $Ram = new Ram;
        $Ram->fill($request->all());

        if($request->hasfile('zdj'))
        {
            $name = $request->zdj->getClientOriginalName();
            $request->zdj->move('images/Ram', $name);
            $Ram->zdj = '../images/Ram/'.$name;
        }
        $Ram->save();

        $request->session()->flash('status', 'Pamięć RAM została dodana!');

        return redirect()->route('adminRam');
    }

    public function postDelete(Request $request)
    {
        if($request->id)
        {
            Ram::find($request->id)->delete();
            $request->session()->flash('status', 'Pamięć RAM została usunięta!');
            return redirect()->back();
        }

        $request->session()->flash('status', 'Coś poszło nie tak, spróbuj ponowanie!');
        return redirect()->back();
    }
}
