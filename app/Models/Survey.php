<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Ramsey\Collection\Collection;

class Survey extends Model
{
    // should this be init'd instead?
    public ?SurveyRespondent $respondent = null;


    protected $session_var_name = 'survey';

    protected $fillable = [
        'id',
        'name',
        'page_prefix',
        'start_page',
        'code'
    ];


    ///////////////////////////
    // Accessors
    //
    public function getRespondentAttribute(): SurveyRespondent
    {
        $state = $this->currentState();

        if (! $state['respondent']) {
            $this->respondent = $this->respondents()
                                     ->create([
                                         'user_id' => \Auth::user()->id,
                                     ]);
            $state['respondent'] = $this->respondent->uuid;
            $this->currentState($state);
        }


        if (! isset($this->respondent) ){
            $this->respondent = SurveyRespondent::whereUuid($state['respondent'])
                                                ->first();
        }

        return $this->respondent;
    }



    public function pages()
    {
        return $this->hasMany(SurveyPage::class)->ordered();
    }

    public function respondents()
    {
        return $this->hasMany(SurveyRespondent::class);
    }



    // manage the session data for survey, this can be teh only place we edit the sesion
    public function currentState($data = null){
        /*
            $session_var_name => [
                'code' => '4Yw7Kfs69wf',
                'page' => 'public-immune-page'
                'respondent' => '{uuid}'
            ]
        */

        $session = session($this->session_var_name);

        $updated = false;

        if(! $session ){
            $session = [
                'code'       => $this->code,
                'page'       => $data['page'] ?? false,
                'respondent' => $data['respondent'] ?? false
            ];
            $updated = true;
        }

        if (($data['respondent'] ?? false)
            && $session['respondent'] !== $data['respondent'] )
        {
            $session['respondent'] = $data['respondent'];
            $updated = true;
        }

        if( ($data['page'] ?? false)
            && $session['page'] !== $data['page'] )
        {
            $session['page'] = $data['page'];
            $updated = true;
        }

        if($updated){
            session()->replace([$this->session_var_name, $session]);
            session()->save();
        }

        return $session;
    }

    public function getPageList(): Collection
    {
        static $list;

        if (! $list) {
            $list = $this->pages->pluck('code', 'sort');
        }

        return $list;
    }


    // manage the session data for survey, this can be teh only place we edit the sesion
    public function setCurrentPageState($page_code): static
    {
        $state = $this->currentState();
        $state['page_code'] = $page_code;
        $this->currentState($state);

        return $this;
    }

    public function getFirstPage()
    {
        return $this->getPageList()
                    ->first();
    }

    public function getLastPage()
    {
        return $this->getPageList()
                    ->last();
    }


    // manage the session data for survey, this can be teh only place we edit the sesion
    public function getCurrentPage($data = null)
    {

        $state = $this->currentState();


        if (! $state['page'] ) {
            //TODO: also handle fast forward

            // this is the 1st page
            $next = $this->pages->first();

        } else {
            // get the next page

            //$current = SurveyPage::codeIs($session['page_code'])
            //                             ->first();

            // is this the last page ??
            if($state['page_code'] == $this->getLastPage()){
                // do last page thing
            }


            // get a list of page codes keyed by the sort int
            // and get the next one
            $next = $this->getPageList()
                         ->after($state['page_code']);

            if(! $next){
                // catch a missed last page
                return abort(404);
            }

        }

        $this->setCurrentPageState($next->code);


        return $state;
    }







}
