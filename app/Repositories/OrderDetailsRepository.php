<?php

namespace App\Repositories;

use App\Models\OrderDetail;
use App\Repositories\BaseRepository;

/**
 * Class productRepository
 * @package App\Repositories
 * @version May 3, 2020, 4:00 pm UTC
 */

class orderDetailsRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'id',
        'productid',
        'orderid',
        'quantity',
        'subtotal',
        'created_at',
        'updated_at',
        'deleted_at',
        'NAME',
        'address',
        'orderdate'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */

    /**
     * Configure the Model
     **/
    public function model()
    {
        return product::class;
    }
}
<?php
