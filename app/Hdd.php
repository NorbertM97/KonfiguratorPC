<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hdd extends Model
{
    protected $table = 'hdds';
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

    public static function getCapacities()
    {
        $query = self::select('capacity')->distinct()->orderBy('capacity', 'asc')->get();
        return $query;
    }   

    public static function getTypes()
    {
        $query = self::select('type')->distinct()->orderBy('type', 'asc')->get();
        return $query;
    }   

    public static function getAll()
    {
        $query = self::with('producent')->get();
        return $query;
    }
}
