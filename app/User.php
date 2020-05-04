<?php

namespace App;

use Illuminate\Contracts\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use App\Models\Scorder;

class User extends Model implements Authenticatable
{
    use \Illuminate\Auth\Authenticatable;
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
    public function likes()
    {
        return $this->hasMany('App\Like');
    }
    protected $fillable = ['name','email','email_verified_at','password'];

    public function Scorders(){
        return $this->hasMany('App\Order');
    }






}
