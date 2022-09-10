<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class Survey extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        /** @var $this \App\Models\Survey */
        ///return parent::toArray($request);

        $this->load(['pages']);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'page_prefix' => $this->page_prefix,
            'code' => $this->code,
            'pages' => $this->pages,
            'respondent' => $this->respondent
        ];


    }
}
