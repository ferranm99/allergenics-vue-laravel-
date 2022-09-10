<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class ContentPage extends JsonResource
{
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

        // $this is read only so make a new data attrucbut
        $data = $this->data;

        $data->home_banner_image = $this->home_banner_image;
        $data->team_one_image = $this->team_one_image;
        $data->team_two_image = $this->team_two_image;
        $data->team_three_image = $this->team_three_image;

        if($data->test_pdf ?? false){
            $data->test_pdf_path = config('app.url').'/storage/'.$data->test_pdf . '.pdf';
        }

        $data->experience_image = $this->experience_image;
        $data->country_image = $this->country_image;
        $data->practitioners_image = $this->practitioners_image;
        $data->range_image = $this->range_image;
        $data->reporting_image = $this->reporting_image;
        $data->preferred_image = $this->preferred_image;
        $data->safety_image = $this->safety_image;

        $data->food_banner_image = $this->food_banner_image;
        $data->food_who_image = $this->food_who_image;
        $data->food_what_results_image = $this->food_what_results_image;
        $data->food_download_sample_pdf = $this->food_download_sample_pdf;
        $data->food_next_steps_image = $this->food_next_steps_image;

        $data->nutrition_banner_image = $this->nutrition_banner_image;
        $data->nutrition_who_image = $this->nutrition_who_image;
        $data->nutrition_what_results_image = $this->nutrition_what_results_image;
        $data->nutrition_download_sample_pdf = $this->nutrition_download_sample_pdf;
        $data->nutrition_next_steps_image = $this->nutrition_next_steps_image;

        $data->womens_banner_image = $this->womens_banner_image;
        $data->womens_who_image = $this->womens_who_image;
        $data->womens_what_results_image = $this->womens_what_results_image;
        $data->womens_download_sample_pdf = $this->womens_download_sample_pdf;
        $data->womens_next_steps_image = $this->womens_next_steps_image;

        $data->mens_banner_image = $this->mens_banner_image;
        $data->mens_who_image = $this->mens_who_image;
        $data->mens_what_results_image = $this->mens_what_results_image;
        $data->mens_download_sample_pdf = $this->mens_download_sample_pdf;
        $data->mens_next_steps_image = $this->mens_next_steps_image;

        $data->sleep_banner_image = $this->sleep_banner_image;
        $data->sleep_who_image = $this->sleep_who_image;
        $data->sleep_what_results_image = $this->sleep_what_results_image;
        $data->sleep_download_sample_pdf = $this->sleep_download_sample_pdf;
        $data->sleep_next_steps_image = $this->sleep_next_steps_image;

        $data->hair_sample_image = $this->hair_sample_image;


        return [
             'id' => $this->id,
             'created_at' => $this->created_at,
             'updated_at' => $this->updated_at,
             'name' => $this->name,
             'slug' => $this->slug,
             'locale' => $this->locale,
             'template' => $this->template,
             'seo_title' => $this->seo_title,
             'seo_description' => $this->seo_description,
             'seo_image' => $this->seo_image,
             'locale_parent_id' => $this->locale_parent_id,
             'data' => $data, //from above
             'media' => $this->media,
             'parent_id' => $this->parent_id,
             'preview_token' => $this->preview_token,
             'published' => $this->published,
             'draft_parent_id' => $this->draft_parent_id,
             'path' => $this->path,
        ];

    }
}
