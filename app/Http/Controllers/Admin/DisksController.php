<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Hdd;

class DisksController extends Controller
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
        $disks = Hdd::getAll();

        return view('admin.disks.index', compact('disks'));
    }
    public function getAdd()
    {
        $producents = Hdd::getAllProducents();
        return view('admin.disks.form', compact('producents'));
    }

    public function postAdd(Request $request)
    {

        $Hdd = new Hdd;
        $Hdd->fill($request->all());

        if($request->hasfile('zdj'))
        {
            $name = $request->zdj->getClientOriginalName();
            $request->zdj->move('images/DYSKI', $name);
            $Hdd->zdj = '../images/DYSKI/'.$name;
        }
        $Hdd->save();

        $request->session()->flash('status', 'Disk został dodany!');

        return redirect()->route('adminDisks');
    }

    public function postDelete(Request $request)
    {
        if($request->id)
        {
            Hdd::find($request->id)->delete();
            $request->session()->flash('status', 'Dysk został usunięty!');
            return redirect()->back();
        }

        $request->session()->flash('status', 'Coś poszło nie tak, spróbuj ponowanie!');
        return redirect()->back();
    }
}
