<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\Sluggable\SlugOptions;
use Spatie\Sluggable\HasSlug;
use Stripe\Collection;

class SurveyPage extends Model implements Sortable
{
    use SortableTrait;
    use HasSlug;


    protected $fillable = [
        'id',
        'survey_id',
        'name',
        'code',
        'sort'
    ];

    // 'sort_on_has_many' = true in config/eloquent-sortable.php,
    public array $sortable = [
        'order_column_name' => 'sort',
        'sort_when_creating' => true,
    ];

    //////////////////
    // Helpers
    //

    //
    // workout the next pages based on the exiting Answers and
    //
    public static function getNextPage(Survey $survey, self $current_page, $answers = null ){

        if(!$answers){
            $answers = collect();
        }

        $pages = $survey->pages;
        $last_idx = false;
        $current_found = false;

        ray($pages, $answers);

        foreach ($pages as $idx => $page){

            // find where we are in the sorted page list
            if($page->id == $current_page->id){
                // we are at the current page
                $current_found = $idx;
            }

            //if we gone past the current page see if we can get a
            if($current_found){
                // check for the next page
                if( $questions =  $page->getViewableQuestions($answers) ){
                    return $page;
                }

            }
            else {
                // only up to when we find the current position in list
                $last_idx = $idx;
            }
        }

    }


    public function getViewableQuestions(Collection $answers){
        $questions = $this->survey_questions;


        return $questions->filter(function ($question, $key) use ($answers){
            // only items that return true are kept
            return $question->checkConditions($answers);
        });
    }



    //////////////////
    // relations
    //
    public function survey(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Survey::class);
    }

    public function survey_questions(): \Illuminate\Database\Eloquent\Relations\HasMany {
        return $this->hasMany(SurveyQuestion::class);
    }

    /////////////////
    // scopes
    //
    /**
     * by Code
     *
     * @param \Illuminate\Database\Eloquent\Builder $query
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function scopeCodeIs($query, $code)
    {
        return $query->where('code', '=', $code);
    }

    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
                          ->generateSlugsFrom(function (Model $model) {

                              $survey = Survey::find($model->survey_id);

                              if($survey->page_prefix ?? false){
                                  return $survey->page_prefix. "-".$model->name;
                              }
                              return "page-".$model->name;
                          })
                          ->saveSlugsTo('code');
    }



}
