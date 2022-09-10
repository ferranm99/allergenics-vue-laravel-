<?php

namespace App\Http\Controllers\Api\Survey;

use App\Http\Controllers\Controller;
use App\Models\SurveyPage;
use App\Models\Survey;
use Illuminate\Http\Request;
use App\Http\Resources\Survey as SurveyResource;
use App\Http\Resources\SurveyPage as SurveyPageResource;



class PageController extends Controller
{
    public function pageIndex($country, Survey $survey){
           return new SurveyResource($survey);
    }

    public function page($country, Survey $survey, $page)
    {
        // for some reason binding isn't working, so we need this
        $page = SurveyPage::find($page);
        return new SurveyPageResource($page);
    }



}
