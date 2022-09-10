<?php

use App\Models\Survey;
use App\Models\SurveyPage ;
use App\Models\SurveyRespondent ;

$uuid=  "63678da9-763e-4c23-856c-f13c0755b7b3";

// $survey  = Survey::find(1);

// $survey->respondents()->create([
//      'user_id' => 1,
// ]);

SurveyRespondent::whereUuid($uuid)->get();

