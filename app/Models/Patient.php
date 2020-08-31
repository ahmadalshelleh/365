<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    use \Znck\Eloquent\Traits\BelongsToThrough;
    public function image(){
        return $this->belongsToThrough('App\Models\Image', 'App\Models\User');
    }

    public function user(){
        return $this->belongsTo( 'App\Models\User');
    }
}
