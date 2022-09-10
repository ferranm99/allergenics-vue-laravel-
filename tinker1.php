<?php

use App\Models\Survey;
use App\Models\SurveyPage ;
use Laravel\Nova\Fields\HasMany;
use Illuminate\Database\Eloquent\Builder;

 // \App\Models\SurveyQuestion::whereRelation('survey', 'survey.id', 1)->pluck('name', 'code');

// $q = \App\Models\SurveyQuestion::find(1);

// $q->survey;

// \App\Models\SurveyQuestion::has('survey_page.survey')->pluck('name', 'code');


// \App\Models\SurveyQuestion::whereHas('survey_page', function (Builder $query, $id=1) {
//     $query->where('survey_pages.survey_id', '=', $id);
// })->pluck('name', 'code')->toArray();


$survey  = Survey::find(1);

$survey->respondents()->create([
     'user_id' => 1,       
]);



//$page = $survey->pages->after();

// $p = $survey->pages->paginate(1);

// //$p->count();
// $p->firstItem();


//$page = SurveyPage::codeIs('public-pregnant-page')->first();

//$survey->pages->at($page);

//$survey->pages->after($page);
// array_search('public-client-page', $survey->pages->toArray(), true);
//array_search($page, $survey->pages->toArray(), true);

//$p = $survey->pages->where('code', 'public-pregnant-page')->after();
//
//$survey->pages->pluck('code','sort')->after('public-pregnant-page');





