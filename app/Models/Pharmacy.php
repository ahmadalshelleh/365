<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pharmacy extends Model
{
    public function image(){
        return $this->belongsTo('App\Models\Image');
    }
}
