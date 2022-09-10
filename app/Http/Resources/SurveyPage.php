<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SurveyPage extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        /** @var $this \App\Models\SurveyPage */
        ///return parent::toArray($request);

        $this->load(['survey_questions']);

        return [
            'id' => $this->id,
            'name' => $this->name,
            'survey_id' => $this->survey_id,
            'code' => $this->code,
            'sort' => $this->sort,
            'questions' => $this->survey_questions
        ];


    }
}
