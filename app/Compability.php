<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Compability extends Model
{
    protected $table = 'compabilities';
    protected $fillable = [
        'name','id'
    ];
}
