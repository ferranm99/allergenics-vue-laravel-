<?php

namespace App\Nova;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;

class Survey extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Survey::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'name';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        /* @var \App\Models\Survey self::model  */
        $id = $this->model->id; //survey id

        return [
            ID::make(__('ID'), 'id')->sortable(),

            Text::make('Name', 'name'),
            Text::make('Page prefix', 'page_prefix'),
            Select::make('Start Page', 'start_page')
                ->options(
                    \App\Models\SurveyQuestion::whereHas('survey_page', function (Builder $query, $id) {
                        $query->where('survey_pages.survey_id', '=', $id);
                    })
                    ->pluck('name', 'code')
                    ->toArray()
                )
                ->nullable(),
            Text::make('Code', 'code'),

            HasMany::make('Pages', 'pages', 'App\Nova\SurveyPage'),
        ];
    }

    /**
     * Get the cards available for the request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function cards(Request $request)
    {
        return [];
    }

    /**
     * Get the filters available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function filters(Request $request)
    {
        return [];
    }

    /**
     * Get the lenses available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function lenses(Request $request)
    {
        return [];
    }

    /**
     * Get the actions available for the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function actions(Request $request)
    {
        return [];
    }
}
