<?php

namespace App\Http\Controllers\Api\Survey;

use App\Enums\QuestionClassEnum;
use App\Enums\QuestionTypeEnum;
use App\Http\Controllers\Controller;
use App\Models\Survey;
use App\Models\SurveyRespondent;
use Illuminate\Http\Request;
use App\Http\Resources\Survey as SurveyResource;



class SurveyController extends Controller
{
    public function survey($country, Survey $survey){
            // setup respondent

            return new SurveyResource($survey);
    }

    public function types($country)
    {
        // setup respondent
        return response()->json(QuestionTypeEnum::asArray());
    }

    public function classes($country)
    {
        // setup respondent
        return response()->json(QuestionClassEnum::asArray());
    }

    public function respondent($country, Survey $survey)
    {

        $respondent = SurveyRespondent::create(
            [
                'survey_id' => $survey->id,
                'user_id' => \Auth::user()->id
            ]
        );

        session()->put('respondent', $respondent);


        // setup respondent
        return new \App\Http\Resources\SurveyRespondent($respondent);
    }

}
