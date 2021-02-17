<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Compability;

class Cover extends Model
{
    protected $table = 'covers';
    protected $guarded = [];

    public function producent()
    {
        return $this->hasOne('App\Producent', 'id' , 'producent_id');
    }
    public function compability()
    {
        return $this->hasOne('App\Compability', 'id', 'compability_id');
    }

    public static function getAll()
    {
        $query = self::with('producent')->get();
        return $query;
    }

    public static function getAllProducents()
    {
        $query = self::with('producent')->select('producent_id')->distinct()->get();
        return $query;
    }    
    
    public static function getAllCompabilities()
    {
        $query = Compability::All();
        return $query;
    }

    public static function getAllTypes()
    {
        $query = self::select('type')->distinct()->get();
        return $query;
    }    
    //
}
