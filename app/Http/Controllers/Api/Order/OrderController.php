<?php

namespace App\Http\Controllers\Api\Order;

use App\Enums\CountryLocaleEnum;
use App\Enums\OrderPaymentMethodEnum;
use App\Enums\OrderStatusEnum;
use App\Enums\OrderTypeEnum;
use App\Enums\ProcessingTypeEnum;
use App\Enums\UserTypeEnum;
use App\Http\Resources\Cart as CartResource;
use App\Http\Resources\ProductsCollection;
use App\Models\Order;
use App\Models\Page;
use App\Models\Product;
use App\Models\Region;
use App\Http\Controllers\Controller;
use App\Models\User;
use Cartalyst\Stripe\Exception\CardErrorException;
use Cartalyst\Stripe\Exception\MissingParameterException;
use Cartalyst\Stripe\Stripe;
use Illuminate\Http\Request;
use App\Http\Resources\Order as OrderResource;
use LukePOLO\LaraCart\LaraCart as Cart;


class OrderController extends Controller
{

    public string $country;
    public string $locale;


    public function __construct(Request $request)
    {
        // this runs before session etc exist so we use
        // \App\Http\Controllers\Controller::callAction
        // to setup the subdomain if the function setSubdomain exists in a
        // controller

    }

    protected function setSubdomain($country){

        $this->country = $country;
        $this->locale = CountryLocaleEnum::getLocaleFromCountry($this->country);

        session()->put('country', $this->country);
        session()->put('locale', $this->locale);

        \LaraCart::setAttribute('country', $this->country);
        \LaraCart::setAttribute('locale', $this->locale);
    }

    public function show(Order $order, Request $request){
        return new OrderResource($order);
    }

    public function current(Request $request)
    {
        return new CartResource([]);
    }

    public function products(Request $request)
    {
        $products = Product::withLocale(session('locale'))->with(['media'])->get();

        //$prices = $products->prices;

        ray($products[1]);

        return response()->json(new ProductsCollection($products));

    }

    public function who($country, Request $request)
    {
        ray($country);


        $this->validate($request, [
            'client_first_name' => ['required'],
            'client_last_name' => ['required'],
            'client_gender' => ['required'],
        ]);
        $cart = \LaraCart::get();

        $cart->setAttribute(
            'client_first_name', $request->get('client_first_name')
        );
        $cart->setAttribute(
            'client_last_name', $request->get('client_last_name')
        );
        $cart->setAttribute(
            'client_gender', $request->get('client_gender')
        );

        ray(__METHOD__, $_SERVER['HTTP_HOST'], session()->all());


        return new CartResource([]);
    }


    public function orderTests(Request $request)
    {

        ray(__METHOD__, $_SERVER['HTTP_HOST'], session()->all(), $request->all());

        $this->validate($request, [
            //'items.*.id' => ['required'],
        ]);

        foreach ($items = \LaraCart::getItems() as $item) {
            \LaraCart::removeItem($item->getHash());
        }



        foreach ($request->get('items') as $product_id){

            //$product = Product::withLocale('en_NZ')->find($item);
            ray('$item product', $product_id, $request->get('items'));

            $item = \LaraCart::addLine($product_id);
            $item->locale = $this->locale;
            $this->currencyCode = CountryLocaleEnum::currencyCode($this->locale);

        }


        return new CartResource([]);
    }

    public function orderFees(Request $request)
    {

        // ray(__METHOD__, $_SERVER['HTTP_HOST'], session()->all(), $request->all());

        $this->validate($request, [
            //'items.*.id' => ['required'],
        ]);

        $locale_product = Product::withLocale(\LaraCart::getAttribute('locale'))->first();

        $missing_consultation = true;
        $missing_processing   = true;

        foreach ($request->get('fees') as $item) {

            if (isset($item['processing'])) {
                $processing_fee = \LaraCart::addFee(
                    'processing',
                    ProcessingTypeEnum::price($item['processing']),
                    $taxable = true,
                    $options = [
                        'locale' => \LaraCart::getAttribute('locale'),
                        'tax' => $locale_product->tax,
                        'name' => $item['processing']
                    ]
                );
                $missing_processing = false;
            }

            if (isset($item['consultation'])  ) {
                // addFee($name, $amount, $taxable = false, array $options = [])
                if(\Str::upper($item['consultation']) == 'YES') {
                    $consultation_fee = \LaraCart::addFee('consultation', config('allergenics.consultation_fee_price'), $taxable = true, $options = [
                        'locale' => \LaraCart::getAttribute('locale'),
                        'tax' => $locale_product->tax
                    ]);
                    $missing_consultation = false;
                }


            }
        }

        if ($missing_consultation) {
            \LaraCart::removeFee('consultation');
        }
        if ($missing_processing) {
            \LaraCart::removeFee('processing');
        }

        //Cart::addFee('zero', 0, $taxable = true, $options = [
        //    'zero' => 'zero'
        //]);

        //$coupon = new \LukePOLO\LaraCart\Coupons\Fixed('CouponCode', 'CouponValue', [
        //    'description' => 'Description'
        //]);

        //Cart::addCoupon($coupon);

        return new CartResource([]);
    }


    public function store(Request $request)
    {

        if (! $cart_id = (\LaraCart::getAttribute('id') ?? false)) {
            response()->json('No active cart', 419);
        }
        $processing_time = ProcessingTypeEnum::STANDARD;
        foreach (\LaraCart::getFees() as $key => $fee) {
            if($key == 'processing'){
                if($fee['options']['processing'] == ProcessingTypeEnum::URGENT){
                    $processing_time = ProcessingTypeEnum::URGENT;
                }
                elseif ($fee['options']['processing'] == ProcessingTypeEnum::FAST){
                    $processing_time = ProcessingTypeEnum::URGENT;
                }
            }
        }


        $order = Order::create([
            'user_id' => \Auth::user()->id,
            'client_id' => NULL,
            'type' => OrderTypeEnum::STANDARD,
            'status' => OrderStatusEnum::ORDER_NEW,
            'processing_time' => $processing_time,
            'cart_id' => $cart_id,
        ]);

        return new OrderResource($order);
    }

    public function update(Order $order, Request $request)
    {
        return new OrderResource($order);
    }

    public function paymentAccount(Request $request)
    {
        $user = User::find(\Auth::user()->id);

        if($user->type === UserTypeEnum::PRACTITIONER){
            $cart = \LaraCart::get();

            $order = Order::makeFromCart($user, $cart, OrderPaymentMethodEnum::ACCOUNT());

            ray(__METHOD__, $order)->green()->large();

            $cart->destroyCart();

            return new OrderResource($order);

        }

        return response()->json('Not Acceptable', 406); // 406 Not Acceptable, This response is sent when the web server, after performing server - driven content negotiation, doesn't find any content that conforms to the criteria given by the user agent.

    }

    public function paymentStripe(Request $request)
    {

        $user = User::find(\Auth::user()->id);

        $token = $request->token;

        $cart = Cart::get();

        $stripe = Stripe::make(config('allergenics.stripe_secret'));


        try {

            $charge = $stripe->charges()
                             ->create([
                                 'card' => $token,
                                 'currency' => CountryLocaleEnum::currencyCode($cart->getAttribute('locale')),
                                 'amount' => $cart->total(false),
                                 'description' => 'Allergenics Testing',
                             ]);

            ray($charge);
            \Log::info('Stripe Payment', ['charge' => $charge]);

            if ($charge['status'] == 'succeeded') {

                $order = Order::makeFromCart($user, $cart, OrderPaymentMethodEnum::STRIPE());

                return new OrderResource($order);

            } else {
                ray($charge);
                \Log::error('Stripe Payment Failed', ['charge' => $charge]);

                return response()->json('Not Acceptable', 406);
            }
        } catch (MissingParameterException $e) {
            ray()->exception($e);
            \Log::error('Stripe Payment: CartalystStripeExceptionMissingParameterException', ['error' => $e->getMessage()]);

            return response()->json('Not Acceptable', 406);
        } catch (CardErrorException $e) {
            ray()->exception($e);
            \Log::error('Stripe Payment: CartalystStripeExceptionCardErrorException', ['error' => $e->getMessage()]);

            return response()->json('Not Acceptable', 406);
        } catch (\Exception $e) {
            ray()->exception($e);
            \Log::error('Stripe Payment', ['error' => $e->getMessage()]);

            return response()->json('Not Acceptable', 406);
        }



        //return response()->json(['status'=> 'successful'], 200);

    }

}
