<?php

namespace App\Models;

use App\Enums\QuestionClassEnum;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;

class SurveyAnswer extends Model
{

    protected $table = 'survey_respondent_answers';

    protected $fillable = [
        'id',
        'survey_id',
        'user_id',
        'question_id',
        'respondent_id',
        'question_code',
        'question_type',
        'question_class',
        'answer'
    ];

    protected $casts = [
        'question_class' => QuestionClassEnum::class,
        //'next_page' => SurveyPage::class,
        'answer' =>'json'
    ];

    protected $next_page;

    public function survey(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Survey::class);
    }

    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function question(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(SurveyQuestion::class);
    }

    public function respondent(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(SurveyRespondent::class);
    }

    /**
     * Interact with the user's address.
     *
     * @return  \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function nextPage(): Attribute
    {
        return Attribute::make(
            get: fn ($value, $attributes)
                    => $this->next_page ?? null,

            set: fn ( $value, $attributes)
                    => $this->next_page = $value,
        );
    }


}
