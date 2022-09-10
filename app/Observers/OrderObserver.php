<?php

namespace App\Observers;

use App\Models\Order;
use App\Http\Resources\OrderGlobiflow;



class OrderObserver
{
    /**
     * Handle the Order "saved" event.
     *
     * @param \App\Models\Order $order
     * @return void
     */
    public function saved(Order $order)
    {
        //

    }


    /**
     * Handle the Order "created" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function created(Order $order)
    {

    }

    /**
     * Handle the Order "updated" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function updated(Order $order)
    {
        // send order to Globiflow
        /*
         *  Dumping Requests
            If you would like to dump the outgoing request instance before it is sent and terminate the script's execution, you may add the dd method to the beginning of your request definition:
            return Http::dd()->get('http://example.com');
         */

        // https://laravel.com/docs/9.x/http-client


        $json = (new OrderGlobiflow($order))->toArray(request());

        ray((new OrderGlobiflow($order))->toArray(request()), $json, $order);

        $response = \Http::post(
            config(
                'allergenics.globiflow_order_endpoint'),
               $json
        );

        ray($response);
    }

    /**
     * Handle the Order "deleted" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function deleted(Order $order)
    {
        //
    }

    /**
     * Handle the Order "restored" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function restored(Order $order)
    {
        //
    }

    /**
     * Handle the Order "force deleted" event.
     *
     * @param  \App\Models\Order  $order
     * @return void
     */
    public function forceDeleted(Order $order)
    {
        //
    }
}
