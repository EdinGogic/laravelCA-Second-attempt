<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Scorder extends Model
{
    public function user(){
        return $this->belongsTo('App\User');
    }

}
