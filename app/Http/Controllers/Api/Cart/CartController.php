<?php

namespace App\Http\Controllers\Api\Cart;

use App\Enums\ClientTypeEnum;
use App\Enums\OrderTypeEnum;
use App\Enums\ProcessingTypeEnum;
use App\Models\Page;
use App\Models\Product;
use App\Models\Region;
use App\Http\Controllers\Controller;
use BenSampo\Enum\Rules\EnumValue;
use Illuminate\Http\Request;
use App\Http\Resources\Cart as CartResource;
use LaraCart as Cart;
use Ramsey\Uuid\Uuid;

class CartController extends Controller
{


    public function store(Request $request){


        $data = $this->validate($request, [
            'id' => 'integer|exists:\App\Models\Product,id',
            'qty'  => 'integer|min:1'
        ]);

        if(! $cart_id = Cart::getAttribute('id') ){
            Cart::setAttribute('id', Uuid::uuid4());
        }

        $product  = Product::find($data['id']);

        $item = Cart::addLine(
            $product->id,
            $name = $product->name,
            $qty = $request->get('qty'),
            $price = $product->price(1),
            $options = [],
            $taxable = true,
            $lineItem = true
        );


        return new CartResource($item);

    }

    public function setClientType(Request $request)
    {

        $this->validate($request, [
            'type' => ['required', new EnumValue(ClientTypeEnum::class, false)]
        ]);

        $type = $request->get('type');

        Cart::setAttribute('type', $type);

        return new CartResource([]);
    }

    public function setClient(Request $request)
    {

        $this->validate($request, [
            'client_first_name' => ['required'],
            'client_last_name'  => ['required'],
        ]);

        $first_name = $request->get('client_first_name');
        $last_name = $request->get('client_last_name');

        Cart::setAttribute('client_first_name', $first_name);
        Cart::setAttribute('client_last_name', $last_name);

        return new CartResource([]);
    }

    public function setProcessing(Request $request)
    {

        $this->validate($request, [
            'processing' => [ 'required', new EnumValue(ProcessingTypeEnum::class, false)]
        ]);

        $processing = $request->get('processing');

        Cart::addFee(
            'processing',
            ProcessingTypeEnum::price($processing),
            $taxable = true,
            $options = [
                'processing' => $processing
            ]
        );

        return new CartResource([]);
    }

    public function show(Region $region)
    {
        return new CartResource([]);
    }

    public function remove($hash, Request $request)
    {
        Cart::removeItem($hash);
        return new CartResource([]);
    }

    public function destroy(Request $request)
    {
        Cart::destroyCart();

        return response()->json('ok');
    }
}
