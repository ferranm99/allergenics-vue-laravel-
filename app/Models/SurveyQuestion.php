<?php

namespace App\Models;

use App\Enums\QuestionClassEnum;
use App\Enums\QuestionTypeEnum;
use Illuminate\Database\Eloquent\Model;
use Spatie\EloquentSortable\Sortable;
use Spatie\EloquentSortable\SortableTrait;
use Spatie\Sluggable\HasSlug;
use Spatie\Sluggable\SlugOptions;

class SurveyQuestion extends Model implements Sortable
{
    use SortableTrait;
    use HasSlug;

    protected $fillable = [
        'id',
        //'survey_id',
        'survey_page_id',
        'type',
        'name',
        'description',
        'code',
        'sort',
        'question',
        'options',
        'conditions',
        'allow_multiple',
        'reset_on_refresh'
    ];

    protected $casts = [
        'class' => QuestionClassEnum::class,
        'type' => QuestionTypeEnum::class,
        'conditions' => 'json',
        'allow_multiple' => 'boolean',
        'reset_on_refresh' => 'boolean',
    ];

    // 'sort_on_has_many' = true in config/eloquent-sortable.php,
    public array $sortable = [
        'order_column_name' => 'sort',
        'sort_when_creating' => true,
    ];

    /**
     * The model's default values for attributes.
     *
     * @var array
     */
    protected $attributes = [
        'allow_multiple' => false,
        'reset_on_refresh' => false,
    ];

    public function survey(): \Illuminate\Database\Eloquent\Relations\HasOneThrough
    {
         //return $this->belongsToTrough(Survey::class);

        /**
         * Define a has-one-through relationship.
         *
         * string $related
         * string $through
         * string|null $firstKey
         * string|null $secondKey
         * string|null $localKey
         * string|null $secondLocalKey
         *  \Illuminate\Database\Eloquent\Relations\HasOneThrough
         */
         return $this->hasOneThrough(
             Survey::class,
             SurveyPage::class,
             'survey_id', // Foreign key on the surveypage table...
             'id', // Foreign key on the owners table...
             'id', // Local key on the mechanics table...
             'id' // Local key on the cars table...
         );
         //return $this->belongsToTrough(Survey::class);
    }

    public function survey_page(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(SurveyPage::class);
    }

    public function checkConditions($answers){

        if( count($this->conditions) == 0 ){
            // if there are no condistion s then we can show this question
            return true;
        }
        else {
            /*
             * [
                  {
                    "layout": "condition",
                    "key": "1alCYf1ehZkfj5W3",
                    "attributes": {
                      "comparison": "=",
                      "value_to_match": "carl",
                      "subject": "question-client-first-name",
                      "as_lower": true
                    }
                  }
                ]
             */

            $matches = 0;

            foreach ($this->conditions as $condition){
                foreach ($answers as $answer){

                    if($answer->question_code == $condition->attributes['subject']){

                        $value  = $condition->attributes['value_to_match'];
                        $answer = $answer->answer;

                        if($condition->attributes['as_lower']){
                            $value  = \Str::lower($value);
                            $answer = \Str::lower($answer);
                        }


                        switch ($condition->attributes['comparison']){
                            case "!=":

                                if ($answer != $value ) {
                                    $matches++;
                                }

                                break;

                            case ">":

                                if ((int) $answer > (int) $value) {
                                    $matches++;
                                }

                                break;

                            case "<":

                                if ((int) $answer < (int) $value) {
                                    $matches++;
                                }

                                break;

                            case "IN":

                                if (is_array($answer)) {

                                    if (in_array($value, $answer)) {
                                        $matches++;
                                    }
                                } // may be used IN incorrectly?
                                else {
                                    if ($answer == $value) {
                                        $matches++;
                                    }
                                }

                            case '=':
                            default:

                                if($value == $answer){
                                    $matches++;
                                }

                                break;
                        }

                    }
                } // /answers
            }// /conditions


            return count($this->conditions) == $matches;

        }
    }


    /**
     * Get the options for generating the slug.
     */
    public function getSlugOptions(): SlugOptions
    {
        return SlugOptions::create()
                          ->generateSlugsFrom(function (Model $model) {
                                return "question-".$model->name;
                          })
                          ->saveSlugsTo('code');
    }}
