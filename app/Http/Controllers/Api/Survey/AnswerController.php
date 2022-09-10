<?php

namespace App\Http\Controllers\Api\Survey;

use App\Enums\QuestionTypeEnum;
use App\Http\Controllers\Controller;
use App\Http\Resources\SurveyAnswerResource;
use App\Models\SurveyAnswer;
use App\Models\SurveyPage;
use App\Models\Survey;
use App\Models\SurveyQuestion;
use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Resources\Survey as SurveyResource;
use App\Http\Resources\SurveyPage as SurveyPageResource;



class AnswerController extends Controller
{

    public function store($country, Survey $survey, $page_id, $question_id, Request $request)
    {

        $page = SurveyPage::find($page_id);
        $question = SurveyQuestion::find($question_id);
        $user = User::find(\Auth::user()->id);

        if( !$respondent = session()->get('respondent') ){
            \Log::critical('No respondent', ['where' => __METHOD__, ]);
            abort('400','No respondent.');
        }

        $answer_data = false;

        switch ($request->answer_type){

            case QuestionTypeEnum::CHECKBOX :
                //
                break;
            case QuestionTypeEnum::NUMBERSELECT :
                //
                $answer_data = (int) $request->answer;
                break;

            case QuestionTypeEnum::TEXTAREA :
            case QuestionTypeEnum::TEXT :
            default:
                $answer_data = (string) $request->answer;
                break;
        }



        $answer = SurveyAnswer::create([
           'survey_id'   => $survey->id,
           'user_id'     => $user->id,
           'question_id' => $question->id,
           'respondent_id' => $respondent->id,
           'question_type' => $question->type,
           'question_code' => $question->code,
           'question_class' => $question->class,
           'answer' => $answer_data
        ]);

        // get the next page
        $answer->next_page = SurveyPage::getNextPage(
            $survey,
            $page,
            SurveyAnswer::where('respondent_id', $respondent->id)->get()
        );

        // includes the next page id to call
        return new SurveyAnswerResource($answer);
    }

}
