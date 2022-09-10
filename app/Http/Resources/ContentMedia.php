<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class ContentMedia extends JsonResource
{
    public $resource = Media::class;


    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);

        return [
             'id' => $this->id,
             'model_type' => $this->model_type,
             'model_id' => $this->model_id,
             'uuid' => $this->uuid,
             'collection_name' => $this->collection_name,
             'name' => $this->name,
             'file_name' => $this->file_name,
             'mime_type' => $this->mime_type,
             'disk' => $this->disk,
             'conversions_disk' => $this->conversions_disk,
             'size' => $this->size,
             'manipulations' => $this->manipulations,
             'custom_properties' => $this->custom_properties,
             'generated_conversions' => $this->generated_conversions,
             'responsive_images' => $this->responsive_images,
             'order_column' => $this->order_column,
             'created_at' => $this->created_at,
             'updated_at' => $this->updated_at,
             'original_url' => $this->original_url,
             'preview_url'  => $this->preview_url
        ];

    }
}
