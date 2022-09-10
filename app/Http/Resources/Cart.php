<?php

namespace App\Http\Resources;

use App\Enums\ClientTypeEnum;
use App\Enums\OrderStatusEnum;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Resources\Json\JsonResource;
use LaraCart;

class Cart extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {

        ray(LaraCart::get('default'));


        //return parent::toArray(\LaraCart::getItems());
        if (! (LaraCart::getAttribute('uuid') ?? false)) {
            LaraCart::setAttribute('uuid', \Str::uuid());
        }

        if( ! ( LaraCart::getAttribute('type') ?? false ) ){
            LaraCart::setAttribute('type', ClientTypeEnum::HUMAN);
        }

        if (\Auth::user()?->id) {
            LaraCart::setAttribute('user_id', \Auth::user()?->id );
            LaraCart::setAttribute('user', User::find(\Auth::user()?->id));
        }

        if (! LaraCart::getAttribute('country') && ( $country = $request->session()->get('country') ) ) {
            LaraCart::setAttribute('country', $country );
        }
        if (! LaraCart::getAttribute('locale') && ($locale = $request->session()->get('locale'))) {
            LaraCart::setAttribute('locale', $locale);
        }

        $sub_total  = 0;
        $total      = 0;
        $tax_total  = 0;
        $fees_tax_total = 0;
        $fees_total = 0;
        $discount   = 0;
        $items_total = 0;


        if(LaraCart::count()) {
            //get a current locale product
            $locale_product = Product::withLocale(LaraCart::getAttribute('locale'))
                                     ->first();

            //get the totals based on speical pricing
            $sub_total = (float) $locale_product->prices->where('qty', LaraCart::count())
                                                        ->first()->price;

            $items_total = (float) $locale_product->prices->where('qty', LaraCart::count())
                                                    ->first()->price_inc;

            $fees_tax_total = LaraCart::feeTaxTotal(false);
            $fees_total = LaraCart::feeSubTotal(false);


            $total = (float) $fees_total + $items_total;

            $tax_total = round($items_total - $sub_total,2);

            $discount = round(LaraCart::total(false) - $total, 2);
        }

        return [
            'id' => LaraCart::getAttribute('id'),
            'type' => LaraCart::getAttribute('type'),
            'uuid' => LaraCart::getAttribute('uuid') ,
            'country' => LaraCart::getAttribute('country'),
            'locale' => LaraCart::getAttribute('locale'),
            'user_id' => LaraCart::getAttribute('user_id'),
            'user' => LaraCart::getAttribute('user'),
            'status' => OrderStatusEnum::ORDER_CART,
            'client_first_name' => LaraCart::getAttribute('client_first_name'),
            'client_last_name' => LaraCart::getAttribute('client_last_name'),
            'client_gender' => LaraCart::getAttribute('client_gender'),
            'items' => LaraCart::getItems(),
            'fees'  => LaraCart::getFees(),
            'coupons'  => LaraCart::getCoupons(),
            'totals'  => [
                'subTotal' => $items_total, // LaraCart::subTotal($format = false, $withDiscount = true),
                //'totalDiscount' => LaraCart::totalDiscount($formatted = false),
                'taxTotal' => $tax_total, // LaraCart::taxTotal($formatted = false),
                'feesTotal' => $fees_total, // LaraCart::taxTotal($formatted = false),
                'feesTaxTotal' => LaraCart::feeTaxSummary(), // LaraCart::taxTotal($formatted = false),
                'total' => $total,
                'discount' => $discount//LaraCart::total($formatted = false, $withDiscount = true)
            ],

        ];

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
        //
        //
        //return [
        //     'id' => $this->id,
        //     'created_at' => $this->created_at,
        //     'updated_at' => $this->updated_at,
        //     'name' => $this->name,
        //     'slug' => $this->slug,
        //     'locale' => $this->locale,
        //     'template' => $this->template,
        //     'seo_title' => $this->seo_title,
        //     'seo_description' => $this->seo_description,
        //     'seo_image' => $this->seo_image,
        //     'locale_parent_id' => $this->locale_parent_id,
        //     'data' => $data, //from above
        //     'media' => $this->media,
        //     'parent_id' => $this->parent_id,
        //     'preview_token' => $this->preview_token,
        //     'published' => $this->published,
        //     'draft_parent_id' => $this->draft_parent_id,
        //     'path' => $this->path,
        //];

    }
}
