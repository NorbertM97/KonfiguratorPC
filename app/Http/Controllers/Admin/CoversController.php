<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Cover;
use Illuminate\Support\Facades\Storage;

class CoversController extends Controller
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
        $covers = Cover::getAll();

        return view('admin.covers.index', compact('covers'));
    }

    public function getAdd()
    {
        $producents = Cover::getAllProducents();
        $compabilities = Cover::getAllCompabilities();
        $types = Cover::getAllTypes();

        return view('admin.covers.form', compact('producents','compabilities','types'));
    }

    public function postAdd(Request $request)
    {
        // dd($request->all());
        $cover = new Cover;
        $cover->fill($request->all());

        if($request->hasfile('zdj'))
        {
            $name = $request->zdj->getClientOriginalName();
            $request->zdj->move('images/Obudowy', $name);
            $cover->zdj = '../images/Obudowy/'.$name;
        }
        $cover->save();

        $request->session()->flash('status', 'Obudowa została dodana!');

        return redirect()->route('adminCovers');
    }

    public function postDelete(Request $request)
    {
        if($request->id)
        {
            Cover::find($request->id)->delete();
            $request->session()->flash('status', 'Obudowa została usunięta!');
            return redirect()->back();
        }

        $request->session()->flash('status', 'Coś poszło nie tak, spróbuj ponowanie!');
        return redirect()->back();
    }
}
