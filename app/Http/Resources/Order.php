<?php

namespace App\Http\Resources;

use App\Enums\ProcessingTypeEnum;
use Illuminate\Http\Resources\Json\JsonResource;

class Order extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {


        return [
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

            'payment_method' => $this->payment_method,
            'items_count' => $this->items->count(),
            'items' => $this->items,

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
