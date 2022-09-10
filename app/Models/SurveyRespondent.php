<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Dyrynda\Database\Support\BindsOnUuid;
use Dyrynda\Database\Support\GeneratesUuid;

class SurveyRespondent extends Model
{
    use GeneratesUuid, BindsOnUuid;

    protected $fillable = [
        'id',
        'uuid',
        'survey_id',
        'client_id',
        'user_id'
    ];


    public function survey(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Survey::class);
    }


    public function user(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(User::class);
    }

    public function survey_answers(): \Illuminate\Database\Eloquent\Relations\HasMany {
        return $this->hasMany(SurveyAnswer::class);
    }

}
