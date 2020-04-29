<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model as Model;

/**
 * Class category
 * @package App\Models
 * @version April 29, 2020, 6:54 pm UTC
 *
 * @property string $name
 */
class category extends Model
{

    public $table = 'category';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
