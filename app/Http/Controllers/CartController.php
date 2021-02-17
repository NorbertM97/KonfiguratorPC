<?php

namespace App\Http\Controllers;

use App\Compability;
use App\Cover;
use App\Cpu;
use App\Gpu;
use App\Hdd;
use App\Motherboard;
use App\Producent;
use App\Psu;
use App\Ram;
use App\Socket;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
use PDF;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Database\Eloquent\Builder;
use Cart;
// https://packagist.org/packages/bumbummen99/shoppingcart
class CartController extends Controller
{


    public function addCoverToCart(Request $request){
        
       
        if($request->input('selected_cover'))
        {
            $this->DeleteFromCartIfExist('cover');
            $item_id = $request->input('selected_cover');
            $cover = Cover::where('id', $item_id)->first();
            Cart::add($item_id, $cover->name, 1, 0, 0,['size' => $cover->GPU_size, 'type'=>'cover', 'photo'=>$cover->zdj, 'name'=>$cover->name, 'compability_id' => $cover->compability_id]);
        }
      
        $cover_compability_id = null;
        foreach(Cart::content() as $cartItem)
        {
            if($cartItem->options->type == "cover")
            {
                $cover_compability_id = $cartItem->options->compability_id;
                break;
            }
        }
        
        
        $mbs = Motherboard::with('producent','compability','socket');
 
        $mbs->where('compability_id', '>=' , $cover_compability_id);

        if($request->input('producent'))
        {
            $producent = $request->input('producent');
            $mbs->whereHas('producent', function (Builder $query) use($producent) {
                $query->whereIn('name', $producent);
            });
        }

        if($request->input('sockets'))
        {
            $socket = $request->input('sockets');
            $mbs->whereHas('socket', function (Builder $query) use($socket) {
                $query->whereIn('name', $socket);
            });
        }

        if($request->input('slots'))
        {
            $slots = $request->input('slots');
            $mbs->whereIn('slots',$slots);
        }

        if($request->input('timings'))
        {
            $timings = $request->input('timings');
            $mbs->whereIn('max_timing',$timings);
        }

        $mbs = $mbs->get();
        // dd($mbs);

        $producents = Motherboard::getAllProducents();
        $compability = Motherboard::getAllCompabilites();
        // dd($compability);
        $sockets = Motherboard::getAllSockets();
        // dd($socket);

            $slots = Motherboard::getAllSlots();
            $timings = Motherboard::getAllTimings();

        return view('secondstep')->with(compact('mbs', 'producents', 'sockets', 'slots', 'timings'));
    }

    private function getMB($id){
        $MB = 0;

        if($id == 1){

            $MB = Motherboard::all();
        }elseif ($id == 2){
            $MB = Motherboard::whereIn('compability_id', [2, 3])->get();

        } else {
            $MB = Motherboard::where('compability_id', 3)->get();
        }

        return $MB;
    }



    public function addMBToCart(Request $request){


        if($request->input('item'))
        {
            $this->DeleteFromCartIfExist('motherboard');
            $item_id = $request->input('item');
            $cover = Motherboard::where('id', $item_id)->first();
            Cart::add($item_id, $cover->name, 1, 0, 0,['type'=>'motherboard', 'photo'=>$cover->zdj, 'name'=> $cover->name, 'socket_id'=> $cover->socket_id]);
        }
        
        $socket_id = null;
        foreach(Cart::content() as $cartItem)
        {
            if($cartItem->options->type == "motherboard")
            {
                $socket_id = $cartItem->options->socket_id;
                break;
            }
        }


        $cpus = cpu::with('socket')->where('socket_id', $socket_id);  

        if($request->input('cores'))
        {
            $cores = $request->input('cores');
            $cpus->whereIn('cores',$cores);
        }

        if($request->input('threats'))
        {
            $threats = $request->input('threats');
            $cpus->whereIn('threats',$threats);
        }

        $cpus = $cpus->get();

        $cores = cpu::getCores();     

        $threats = cpu::getThreats();



        return view('thirdstep')->with(compact('cpus', 'cores', 'threats'));
    }


    public function addCpuToCart(Request $request){

        if($request->input('item'))
        {
            $this->DeleteFromCartIfExist('cpu');
            $item_id = $request->input('item');      
            $cover = Cpu::where('id', $item_id)->first();
            Cart::add($item_id, $cover->name, 1, 0, 0,['type'=>'cpu','power' => $cover->power, 'photo'=>$cover->zdj, 'name'=>$cover->name]);
        }
        
        $rams = Ram::where('id', '>' , 0);

        if($request->input('producent'))
        {
            $producent = $request->input('producent');
            $rams->whereHas('producent', function (Builder $query) use($producent) {
                $query->whereIn('name', $producent);
            });
        }

        if($request->input('memories'))
        {
            $memories = $request->input('memories');
            $rams->whereIn('memory',$memories);
        }

        if($request->input('latencies'))
        {
            $latencies = $request->input('latencies');
            $rams->whereIn('latency',$latencies);
        }

        if($request->input('timings'))
        {
            $timings = $request->input('timings');
            $rams->whereIn('timing',$timings);
        }


        $rams = $rams->get();
        

        $producentsIds = DB::table('rams')->select('producent_id')->distinct()->get();

        $producents = Ram::getAllProducents();
       
       

        $memories = Ram::getMemories();

        $latencies = Ram::getLatencies();

        $timings = Ram::getTimings();

   

        return view('fourthstep')->with(compact('rams', 'producents', 'memories', 'latencies', 'timings'));
    }

    public function addRamToCart(Request $request)
    {

        $coverSize = null;
        foreach(Cart::content() as $cartItem)
        {
            if($cartItem->options->type == "cover")
            {
                $coverSize = $cartItem->options->size;
                break;
            }
        }
        
        if($request->input('item'))
        {
            $this->DeleteFromCartIfExist('ram');
            $item_id = $request->input('item');
            $cover = Ram::where('id', $item_id)->first();      
            Cart::add($item_id, $cover->name, 1, 0, 0,['type'=>'ram', 'photo'=>$cover->zdj, 'name'=>$cover->name]);
        }
       
        $gpus = Gpu::where('id', '>', 0);


        if($request->input('producent'))
        {
            $producent = $request->input('producent');
            $gpus->whereHas('producent', function (Builder $query) use($producent) {
                $query->whereIn('name', $producent);
            });
        }

        if($request->input('series'))
        {
            $series = $request->input('series');
            $gpus->whereIn('series',$series);
        }

        if($request->input('memories'))
        {
            $memories = $request->input('memories');
            $gpus->whereIn('memory',$memories);
        }


        $gpus = $gpus->get();
      

        $producents = Gpu::getAllProducents();

        $series = GPU::getSeries();

        $memories = GPU::getMemories();

        return view('fifthstep')->with(compact('gpus', 'producents', 'series', 'memories'));
    }

    private function getPower(){
      
        $gpuPower = null;
        $cpuPower = null;

        foreach(Cart::content() as $cartItem)
        {
            if($cartItem->options->type == "cpu")
            {
                $cpuPower = $cartItem->options->power;
            }
            elseif($cartItem->options->type == "gpu")
            {
                $gpuPower = $cartItem->options->power;
            }
        }

        $power = $gpuPower + $cpuPower;

        return $power;
    }

    public function addGpuToCart(Request $request){

        if($request->input('item'))
        {
            $this->DeleteFromCartIfExist('gpu');
            $item_id = $request->input('item');  
            $cover = Gpu::where('id', $item_id)->first();
            Cart::add($item_id, $cover->name, 1, 0, 0, ['type'=>'gpu','power' => $cover->power, 'photo'=>$cover->zdj, 'name'=>$cover->name]);
        }
       
        $hdds = Hdd::where('id','>',0);

        if($request->input('producent'))
        {
            $producent = $request->input('producent');
            $hdds->whereHas('producent', function (Builder $query) use($producent) {
                $query->whereIn('name', $producent);
            });
        }

        if($request->input('capacities'))
        {
            $capacities = $request->input('capacities');
            $hdds->whereIn('capacity',$capacities);
        }

        if($request->input('types'))
        {
            $types = $request->input('types');
            $hdds->whereIn('type',$types);
        }

        $hdds = $hdds->get();

        $producents = Hdd::getAllProducents();
        $capacities = Hdd::getCapacities();
        $types = Hdd::getTypes();
        

        return view('sixthstep')->with(compact('hdds', 'producents', 'capacities', 'types'));
    }

    public function addHddToCart(Request $request){

        if($request->input('item'))
        {
            $this->DeleteFromCartIfExist('hdd');
            $item_id = $request->input('item');
            $cover = Hdd::where('id', $item_id)->first();
            Cart::add($item_id, $cover->name, 1, 0, 0,['type'=>'hdd', 'photo'=>$cover->zdj, 'name'=>$cover->name]);
        }
       
        $psus = Psu::where('power', '>', $this->getPower());

        if($request->input('producent'))
        {
            $producent = $request->input('producent');
            $psus->whereHas('producent', function (Builder $query) use($producent) {
                $query->whereIn('name', $producent);
            });
        }

        if($request->input('powers'))
        {
            $powers = $request->input('powers');
            $psus->whereIn('power',$powers);
        }
        $psus = $psus->get();

        $producents = Psu::getAllProducents();

        $powers = Psu::getPowers();
        
        return view('seventhstep')->with(compact('psus', 'producents', 'powers'));
    }

    public function addPsuToCart(Request $request){

        if($request->input('item'))
        {
            $this->DeleteFromCartIfExist('psu');
            $item_id = $request->input('item');
            $cover = Psu::where('id', $item_id)->first();
            Cart::add($item_id, $cover->name, 1, 0, 0, ['type'=>'psu', 'photo'=>$cover->zdj, 'name'=>$cover->name]);
        }
      

        $totalCart = array();
        foreach(Cart::content() as $cartItem)
        {
            $totalCart[] = array(
                'name' => $cartItem->options->name,
                'photo' => $cartItem->options->photo,
            );
        }
        // dd($totalCart);
        return view('laststep', compact('totalCart'));
    }

    public function printPDF(Request $request)
    {
        $data=[

        ];


        $pdf = PDF::loadView('pdf_view', $data);
        return $pdf->download('Komponenty.pdf');

    }

    // Delete old cart item when user add new
    private function DeleteFromCartIfExist($type)
    {
        foreach(Cart::content() as $cartItem)
        {
            if($cartItem->options->type == $type)
            {
                $rowId = $cartItem->rowId;
                Cart::remove($rowId);
            }
        }
    }
}
