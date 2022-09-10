<?php

namespace App\Models;

use App\Enums\CountryLocaleEnum;
use App\Enums\OrderPaymentMethodEnum;
use App\Enums\OrderStatusEnum;
use App\Enums\OrderTypeEnum;
use App\Enums\ProcessingTypeEnum;
use App\Events\OrderSavedEvent;
use Illuminate\Database\Eloquent\Model;
use LukePOLO\LaraCart\Cart;
use LukePOLO\LaraCart\LaraCart;
use Dyrynda\Database\Support\GeneratesUuid;

class Order extends Model
{
    use GeneratesUuid;

    protected $fillable = [
        'id',
        'uuid',
        'user_id',
        'client_id',
        'cart_id',
        'type',
        'status',

        'client_first_name',
        'client_last_name',
        'client_gender',

        'processing_time',
        'consultation',
        'prescription',
        'questionnaire_complete',
        'questionnaire_current_page',

        'currency',
        'payment_method',

        'sub_total',
        'sub_total_inc_tax',
        'tax_total',
        'fees_total',
        'total',
        'discount_amount',

    ];

    protected $casts = [
        'type' => OrderTypeEnum::class,
        'status' => OrderStatusEnum::class,
        'consultation' => 'bool',
        'prescription' => 'bool',
        'questionnaire_complete' => 'bool',
    ];

    /**
     * See the Order Observer
     * @ \App\Providers\EventServiceProvider::boot
     */


    public static function makeFromCart(User $user, LaraCart $cart, OrderPaymentMethodEnum $method  ){

        if (! $cart->count()) {
            return false;
        }


        $fees = $cart->getFees();

        $processing   = false;
        $consultation = false;

        foreach ($fees as $name => $fee){
            /* @var \LukePOLO\LaraCart\CartFee $fee */

            if($name == 'consultation'){
                $consultation = true;
            }
            else if ($name == 'processing') {
                $processing = $fee->options['name']; // ProcessingTypeEnum
            }

        }

        $order = self::create([
                'user_id' => $user->id,
                'cart_id' => 1, // TODO
                'type' => OrderTypeEnum::STANDARD,
                'status' => OrderStatusEnum::ORDER_PAID,

                'client_first_name' => $cart->getAttribute('client_first_name'),
                'client_last_name' => $cart->getAttribute('client_last_name'),
                'client_gender' => $cart->getAttribute('client_gender'),

                'payment_method' => $method,

                'processing_time' => $processing,
                'consultation' => $consultation, // bool
                'questionnaire_complete' => false,
        ]);


        // totals
        //get a current locale product -- it doesn't matter which product it is the
        // locale sets the GEO pricing
        $locale_product = Product::withLocale($cart->getAttribute('locale'))
                                 ->first();

        //get the totals based on special pricing
        $order->sub_total = (float) $locale_product->prices->where('qty', $cart->count())
                                                   ->first()->price;
        // sub_total_inc_tax
        $order->sub_total_inc_tax = (float) $locale_product->prices->where('qty', $cart->count())
                                                           ->first()->price_inc;

        $order->fees_total      = $cart->feeSubTotal(false);
        $order->total           = (float) $order->fees_total + $order->sub_total_inc_tax;
        $order->tax_total       = round($order->sub_total_inc_tax - $order->sub_total, 2);
        $order->discount_amount = round($cart->total(false) - $order->total, 2);

        $order->currency        = CountryLocaleEnum::currencyCode($cart->getAttribute('locale'));


        foreach ($cart->getItems() as $item) {
            /* @var \LukePOLO\LaraCart\CartItem $item */

            ray('options', $item->options, $item);

            $product = $item->options['model'];

            $item_price = round($order->sub_total_inc_tax / $cart->count(), 2);

            // OrderItem
            $order->items()
                  ->create([
                      'order_id' => $order->id,
                      'user_id' => $user->id,
                      'product_id' => $item->options['id'],
                      'price' => $item_price,
                      'tax' => round(( $order->sub_total_inc_tax - $order->sub_total)  / $cart->count(), 2),
                      'discount' => round(($product->price - $item_price), 2),
                      'qty' => 1
                  ]);
        }

        // tiggers the updated event
        // to send to globiflow
        $order->save();

        return $order;

    }



    public function items(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(OrderItem::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }


}
