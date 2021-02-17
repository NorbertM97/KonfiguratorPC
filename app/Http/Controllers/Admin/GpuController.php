<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Gpu;

class GpuController extends Controller
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
        $gpus = Gpu::getAll();

        return view('admin.gpu.index', compact('gpus'));
    }
    public function getAdd()
    {
        $producents = Gpu::getAllProducents();
        return view('admin.gpu.form', compact('producents'));
    }

    public function postAdd(Request $request)
    {

        $Gpu = new Gpu;
        $Gpu->fill($request->all());

        if($request->hasfile('zdj'))
        {
            $name = $request->zdj->getClientOriginalName();
            $request->zdj->move('images/GPU', $name);
            $Gpu->zdj = '../images/GPU/'.$name;
        }
        $Gpu->save();

        $request->session()->flash('status', 'Karta graficzna została dodana!');

        return redirect()->route('adminGpu');
    }

    public function postDelete(Request $request)
    {
        if($request->id)
        {
            Gpu::find($request->id)->delete();
            $request->session()->flash('status', 'Karta graficzna została usunięta!');
            return redirect()->back();
        }

        $request->session()->flash('status', 'Coś poszło nie tak, spróbuj ponowanie!');
        return redirect()->back();
    }
}
