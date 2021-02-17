<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ram extends Model
{
    protected $table = 'rams';
    protected $guarded = array();

    public function producent()
    {
        return $this->hasOne('App\Producent', 'id','producent_id');
    }
    public function compability()
    {
        return $this->hasOne('App\Compability', 'id', 'compability_id');
    }

    public static function getAllProducents()
    {
        $query = self::with('producent')->select('producent_id')->distinct()->get();
        return $query;
    }    

    public static function getLatencies()
    {
        $query = self::select('latency')->distinct()->orderBy('latency', 'asc')->get();
        return $query;
    }    

    public static function getTimings()
    {
        $query = self::select('timing')->distinct()->orderBy('timing', 'asc')->get();
        return $query;
    }   

    public static function getMemories()
    {
        $query = self::select('memory')->distinct()->orderBy('memory', 'asc')->get();
        return $query;
    }    
    
    public static function getAll()
    {
        $query = self::with('producent')->get();
        return $query;
    }
}
