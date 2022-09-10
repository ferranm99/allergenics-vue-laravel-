<?php

namespace App\Http\Controllers\Api\Checkout;

use App\Enums\OrderStatusEnum;
use App\Enums\OrderTypeEnum;
use App\Models\Order;
use App\Models\Page;
use App\Models\Product;
use App\Models\Region;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\Cart as CartResource;
use App\Http\Resources\Order as OrderResource;
use LaraCart as Cart;

class CheckoutController extends Controller
{


    public function current(Request $request)
    {

        $cart_id = Cart::getAttribute('id');

        $order = Order::where('cart_id', $cart_id)->first();

        if(!$order){
            $order = Order::create([
                'cart_id' => $cart_id,
                'user_id' => \Auth::user(),
                'type'    => OrderTypeEnum::STANDARD,
                'status'  => OrderStatusEnum::ORDER_UNPAID
                // no user as they may not be logged in
            ]);
        }



        return new OrderResource($order);
    }


    public function store(Request $request){


        $data = $this->validate($request, [
            'email' => 'email|unique:users',
            'last_name'  => 'required|min:1',
            'first_name'  => 'required|min:1',
            'first_name'  => 'required|min:1'
        ]);





        return new CartResource($item);

    }





}
