<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Motherboard;

class MotherboardController extends Controller
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
        $motherboards = Motherboard::getAll();


        return view('admin.motherboards.index', compact('motherboards'));
    }

    public function getAdd()
    {
        $producents = Motherboard::getAllProducents();
        $compabilities = Motherboard::getAllCompabilites();
        $sockets = Motherboard::getAllSockets();
        // dump($sockets);

        return view('admin.motherboards.form', compact('producents','compabilities','sockets'));
    }

    public function postAdd(Request $request)
    {

        $motherboard = new Motherboard;
        $motherboard->fill($request->all());

        if($request->hasfile('zdj'))
        {
            $name = $request->zdj->getClientOriginalName();
            $request->zdj->move('images/motherboard', $name);
            $motherboard->zdj = '../images/motherboard/'.$name;
        }
        $motherboard->save();

        $request->session()->flash('status', 'Płyta główna została dodana!');

        return redirect()->route('adminMotherboard');
    }

    public function postDelete(Request $request)
    {
        if($request->id)
        {
            Motherboard::find($request->id)->delete();
            $request->session()->flash('status', 'Płyta główna została usunięta!');
            return redirect()->back();
        }

        $request->session()->flash('status', 'Coś poszło nie tak, spróbuj ponowanie!');
        return redirect()->back();
    }
}
