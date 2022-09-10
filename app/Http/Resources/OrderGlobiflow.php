<?php

namespace App\Http\Resources;

use App\Enums\ProcessingTypeEnum;
use App\Models\OrderItem;
use Illuminate\Http\Resources\Json\JsonResource;

class OrderGlobiflow extends JsonResource
{
    //public $resource = \App\Models\Order::class;

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        //return parent::toArray($request);

        //dump($this->data);
        //
        //// $this is read only so make a new data attrucbut
        //$data = $this->data;
        //
        //$data->experience_image = $this->experience_image;
        //$data->country_image = $this->country_image;
        //$data->practitioners_image = $this->practitioners_image;
        //$data->range_image = $this->range_image;
        //$data->reporting_image = $this->reporting_image;
        //$data->preferred_image = $this->preferred_image;
        //$data->safety_image = $this->safety_image;
        $output = [
            'id' => $this->id,
            'order_key' => $this->uuid,
            'status' => $this->status,
            'currency' => $this->currency,

            'total' => $this->total,
            'total_tax' => $this->tax_total,
            'sub_total_inc_tax' => $this->sub_total_inc_tax,
            'fees_total' => $this->fees_total,

            'questionnaire_complete' => $this->questionnaire_complete,

            'client_first_name' => $this->client_first_name,
            'client_last_name' => $this->client_last_name,
            'client_gender' => $this->client_gender,

            'customer_id' => $this->user->id,
            'customer_first_name' => $this->user->first_name,
            'customer_last_name' => $this->user->last_name,

            'non_standard_processing' => $this->processing_time !== ProcessingTypeEnum::STANDARD,
            'processing' => $this->processing_time,
            'processing_price' => number_format((float) ProcessingTypeEnum::price($this->processing_time), 2, '.', ''),
            'prescription' => $this->prescription,
            'followup_consultation' => $this->consultation,

            'payment_method' => 'account', //TODO
            'items_count' => $this->items->count(),

        ];

        /*$items = $this->items->map(function (OrderItem $item) {

                    return (object) [
                        'item_id' => $item->id,
                        'item_name' => $item->product->name,
                        'product_id' => $item->product->id,
                        'sku' => $item->product->sku,
                    ];
                 })->values();*/

        foreach ($this->items as $idx=>$item){
            $output['item_'.$idx.'_id']   = $item->id;
            $output['item_'.$idx.'_name'] = $item->product->name;
            $output['item_'.$idx.'_user_type'] = $item->product->user_type;
            $output['item_'.$idx.'_product_id'] = $item->product->id;
            $output['item_'.$idx.'_sku']  = $item->product->sku;
        }


        return $output;

    }
}

/*
{
    "id": 65359,
    "order_key": "ac91ea57-1b82-4539-9203-dddf52146501",
    "status": "processing",
    "currency": "NZD",
    "prices_include_tax": true,
    "date_created": "2022-04-03 14:40:10",
    "date_modified": "2022-04-03 14:47:30",
    "total": "234.00",
    "total_tax": "30.52",
    "customer_id": 10382,
    "customer_uuid": "f65d6997-e44a-44c8-8b19-a22e2ff9e905",
    "customer_first_name": "fleur",
    "customer_last_name": "leabourn",
    "customer_company": "",
    "customer_address_1": "5 Lyttle Lane",
    "customer_address_2": "",
    "customer_city": "Warkworth",
    "customer_region": "Auckland",
    "customer_postcode": "0910",
    "customer_country": "NZ",
    "customer_email": "fleurl@warkworth.school.nz",
    "customer_phone": "021605624",
    "payment_method": "stripe",
    "transaction_id": "ch_3KkJMPKWYoBivyqa0LJWWw26",
    "customer_note": "",
    "number": "54710",
    "order_items": [
        {
            "item_id": 30473,
            "item_name": "Food and Environmental Sensitivity Test",
            "item_type": "order_item",
            "product_id": 2,
            "sku": "nt-food"
        },
        {
            "item_id": 30474,
            "item_name": "Comprehensive Women's Health Test",
            "item_type": "order_item",
            "product_id": 4,
            "sku": "nt-comp-womens"
        }
    ],
    "coupon_lines": [
    ],
    "non_standard_processing": true,
    "processing": "urgent_1day",
    "processing_price": 60.00,
    "prescription": false,
    "followup_consultation": true,
    "survey_complete": false,
    "survey_uuid": "01871d2c-b2f7-11ec-b757-0abd381c86a0",
    "client_name": "Bob Brown",
    "client_gender": "male",
    "client_age": 30
}

 */
