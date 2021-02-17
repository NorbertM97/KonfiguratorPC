<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Cpu extends Model
{
    protected $table = 'cpus';
    protected $guarded = array();

    public function producent()
{
    return $this->hasOne('App\Producent', 'id','producent_id');
}
    public function compability()
{
    return $this->hasOne('App\Compability', 'id', 'compability_id');
}    
public function socket()
{
    return $this->hasOne('App\Socket', 'id', 'socket_id');
}


    public static function getAll()
    {
        $query = self::with('producent','compability')->get();
        return $query;
    }

    public static function getAllProducents()
    {
        $query = self::with('producent')->select('producent_id')->distinct()->get();
        return $query;
    }

    public static function getCores()
    {
        $query = self::select('cores')->distinct()->orderBy('cores', 'asc')->get();
        return $query;
    }

    public static function getThreats()
    {
        $query = self::select('threats')->distinct()->orderBy('threats', 'asc')->get();
        return $query;
    }
}
