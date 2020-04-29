<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class product
 * @package App\Models
 * @version April 26, 2020, 6:43 pm UTC
 *
 * @property string $name
 * @property string $weight
 * @property number $Price
 * @property integer $categoryID
 */
class user extends Model
{

    public $table = 'user';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'email',
        'password'   
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'email' => 'string',
        'password' => 'string',

    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
	public function user()
	{
		return $this->belongsTo(\App\User::class,'userid','id');
	}
    
}
