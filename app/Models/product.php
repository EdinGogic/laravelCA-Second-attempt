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
class product extends Model
{

    public $table = 'product';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'name',
        'weight',
        'Price',
        'categoryID'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'name' => 'string',
        'weight' => 'string',
        'Price' => 'float',
        'categoryID' => 'integer'
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];

    
}
