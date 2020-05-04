<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Repositories\productRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\OrderDetail;
use App\Repositories\orderDetailsRepository;
use Illuminate\Http\Request;
use Flash;
use Response;
use Session;

class ScorderController extends AppBaseController
{
    public function checkout()
    {
        if (Session::has('cart')) {
            $cart = Session::get('cart');
            $lineitems = array();
            foreach ($cart as $productid => $qty) {
                $lineitem['product'] = \App\Models\Product::find($productid);
                $lineitem['qty'] = $qty;
                $lineitems[] = $lineitem;
            }
            return view('scorders.checkout')->with('lineitems', $lineitems);
        }
        else {
            Flash::error("There are no items in your cart");
            return redirect(route('products.displaygrid'));
        }

    }

       public function placeorder(Request $request)
        {
            $thisOrder = new \App\Models\OrderDetail();
            $thisOrder->created_at = (new \DateTime())->format("Y-m-d H:i:s");
            $thisOrder->productid;
            $thisOrder->name = $request->input('name');
            $thisOrder->address = $request->input('address');


            $thisOrder->save();




            Session::forget('cart');
            Flash::success("Your Order has Been Placed");
            return redirect(route('products.displaygrid'));
        }



}

