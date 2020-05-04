<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Repositories\productRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\OrderDetail;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session;

class OrderDetailsController extends AppBaseController
{

    public function store(CreateOrderDetailsRequest $request)
    {
        $input = $request->all();

        $order  = $this->orderDetailsRepository->create($input);

        Flash::success('You/ve checked out!');

        return redirect(route('products.index'));
    }


}


