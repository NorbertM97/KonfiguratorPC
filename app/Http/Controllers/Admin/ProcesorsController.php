<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cpu;

class ProcesorsController extends Controller
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
        $procesors = Cpu::getAll();

        return view('admin.procesors.index', compact('procesors'));
    }

    public function getAdd()
    {
        $producents = Cpu::getAllProducents();
        return view('admin.procesors.form', compact('producents'));
    }

    public function postAdd(Request $request)
    {

        $Cpu = new Cpu;
        $Cpu->fill($request->all());

        if($request->hasfile('zdj'))
        {
            $name = $request->zdj->getClientOriginalName();
            $request->zdj->move('images/CPU', $name);
            $Cpu->zdj = '../images/CPU/'.$name;
        }
        $Cpu->save();

        $request->session()->flash('status', 'Procesor został dodany!');

        return redirect()->route('adminProcesors');
    }

    public function postDelete(Request $request)
    {
        if($request->id)
        {
            Cpu::find($request->id)->delete();
            $request->session()->flash('status', 'Procesor został usunięty!');
            return redirect()->back();
        }

        $request->session()->flash('status', 'Coś poszło nie tak, spróbuj ponowanie!');
        return redirect()->back();
    }
}
