<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Motherboard extends Model
{
    protected $table = 'motherboards';
    protected $guarded = array();

    public function producent()
    {
        return $this->hasOne('App\Producent', 'id' , 'producent_id');
    }

    public function compability()
    {
        return $this->hasOne('App\Compability', 'id', 'compability_id');
    }

    public function socket()
    {
        return $this->hasOne('App\Socket', 'id', 'socket_id');
    }

    public static function getAllProducents()
    {
        $query = self::with('producent')->select('producent_id')->distinct()->get();
        return $query;
    }   
    
    public static function getAllCompabilites()
    {
        $query = self::with('compability')->select('compability_id')->distinct()->get();
        return $query;
    }
    
    public static function getAllSockets()
    {
        $query = self::with('socket')->select('socket_id')->distinct()->get();
        return $query;
    }
    public static function getAllSlots()
    {
        $query = self::select('slots')->distinct()->orderBy('slots', 'asc')->get();
        return $query;
    }

    public static function getAllTimings()
    {
        $query = self::select('max_timing')->distinct()->orderBy('max_timing', 'asc')->get();
        return $query;
    }

    public static function getAll()
    {
        $query = self::with('producent','socket')->get();
        return $query;
    }
    //
}
