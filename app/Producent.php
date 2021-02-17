<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Producent extends Model
{
    protected $table = 'producents';
    protected $fillable = [
        'name','id'
    ];

    public static function getAllProducents()
    {
        return self::all();
    }

    // public static function getProducentsByFilter($filter)
    // {
    //     return null;
    // }

}
