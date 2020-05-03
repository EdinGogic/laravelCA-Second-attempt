<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scorder extends Model
{

    public $table = 'Scorder';
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'orderdate',
        'deliverystreet',
        'deliverycity',
        'deliverycountry',
		'ordertotal',
		'created_at',
		'updated_at',
		'deleted_at'
    ];

    /**
     * The attributes that should be casted to native types.
     *
     * @var array
     */
    protected $casts = [
        'id' => 'integer',
        'orderdate' => 'datetime',
        'deliverystreet' => 'varchar',
        'deliverycity' => 'varchar',
        'deliverycountry' => 'varchar',
		'ordertotal' => 'decimal',
        'created_at' => 'datetime',
        'updated_at' => 'datetime',
		'deleted_at' => 'datetime',
    ];

    /**
     * Validation rules
     *
     * @var array
     */
    public static $rules = [
        
    ];
}
