<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Psu extends Model
{
    protected $table = 'psus';
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

    public static function getPowers()
    {
        $query = self::select('power')->distinct()->orderBy('power', 'asc')->get();
        return $query;
    }    
    
    public static function getAll()
    {
        $query = self::with('producent')->get();
        return $query;
    }
}
