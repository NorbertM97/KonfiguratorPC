<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gpu extends Model
{
    protected $table = 'gpus';
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

    public static function getSeries()
    {
        $query = self::select('series')->distinct()->orderBy('series', 'asc')->get();
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
