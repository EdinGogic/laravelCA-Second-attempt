<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateproductRequest;
use App\Http\Requests\UpdateproductRequest;
use App\Repositories\productRepository;
use App\Http\Controllers\AppBaseController;
use App\Models\Scorder;
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
        $thisOrder = new \App\Models\Scorder();
        $thisOrder->orderdate = (new \DateTime())->format("Y-m-d H:i:s");
        $thisOrder->save();
        $orderID = $thisOrder->id;
        $productids = $request->productid;
        $quantities = $request->quantity;
        for($i=0;$i<sizeof($productids);$i++) {
            $thisOrderDetail = new \App\Models\OrderDetail();
            $thisOrderDetail->orderid = $orderID;
            $thisOrderDetail->productid = $productids[$i];
            $thisOrderDetail->quantity = $quantities[$i];
            $thisOrderDetail->save();
        }
        Session::forget('cart');
        Flash::success("Your Order has Been Placed");
        return redirect(route('products.displaygrid'));
    }


















}

