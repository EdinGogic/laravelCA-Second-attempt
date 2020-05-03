<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{

    public $table = 'OrderDetail';

    const CREATED_AT = 'created_at';
    const UPDATED_AT = 'updated_at';




    public $fillable = [
        'productid',
        'orderid',
        'quantity',
        'subtotal',
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
        'productid' => 'integer',
        'orderid' => 'integer',
        'quantity' => 'integer',
        'subtotal' => 'decimal',
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
