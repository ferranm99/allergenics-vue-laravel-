<?php

namespace App\Nova;

use App\Enums\QuestionClassEnum;
use App\Enums\QuestionTypeEnum;
use App\Enums\UserTypeEnum;
use Epartment\NovaDependencyContainer\HasDependencies;
use Epartment\NovaDependencyContainer\NovaDependencyContainer;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Select;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use OptimistDigital\NovaSortable\Traits\HasSortableRows;
use PhpParser\Node\Expr\Cast\Bool_;
use SimpleSquid\Nova\Fields\Enum\Enum;
use Whitecube\NovaFlexibleContent\Flexible;
use Illuminate\Database\Eloquent\Builder;

class SurveyQuestion extends Resource
{
    use HasSortableRows;
    use HasDependencies;

    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\SurveyQuestion::class;

    /**
     * The single value that should be used to represent the resource when being displayed.
     *
     * @var string
     */
    public static $title = 'id';

    /**
     * The columns that should be searched.
     *
     * @var array
     */
    public static $search = [
        'id',
    ];

    /**
     * Indicates if the resource should be displayed in the sidebar.
     *
     * @var bool
     */
    public static $displayInNavigation = true;

    public static $perPageViaRelationship = 50;

    /**
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            //BelongsTo::make('Survey', 'survey', 'App\Nova\Survey'),
            BelongsTo::make('Page', 'survey_page', 'App\Nova\SurveyPage'),

            //Enum::make('Question Type', 'type')
            //    ->attach(QuestionClassEnum::class)->required(),
            //Text::make('Question Type', 'type')->default(function ($item) {
            //    return 'HUMAN';
            //}),
            Select::make('Class of question', 'class')
                ->options(
                    QuestionClassEnum::asArray()
                )
                ->displayUsingLabels(),


            Text::make('Name', 'name'),

            Select::make('Question Type', 'type')
                  ->options(QuestionTypeEnum::asArray())
                  ->displayUsingLabels(),


            // uses optimistdigital/nova-sortable
            // Number::make('Sort', 'sort'),

            Text::make('Question', 'question'),

            NovaDependencyContainer::make([
                Flexible::make('Options', 'options')
                        ->addLayout('Option', 'option', [
                            Text::make('Label'),
                            Text::make('Value'),
                        ])
                        ->button('Add option'),

                Boolean::make('Allow Multiple Answers?', 'allow_multiple'),

            ])->dependsOn('type', QuestionTypeEnum::CHECKBOX ),


            NovaDependencyContainer::make([
                Flexible::make('Options', 'options')
                        ->addLayout('Option', 'option', [
                            Text::make('Label'),
                            Text::make('Value'),
                        ])
                    ->button('Add option'),
                // no Multiple for radio groups
            ])->dependsOn('type', QuestionTypeEnum::RADIOGROUP),


            Boolean::make('Reset on browser page refresh?', 'reset_on_refresh'),

            Text::make('Code', 'code')
                ->help('Dont\'t fill this in, its done for you.')
                ->readonly(),
            /* [
                    {
                        "subject": "question4",
                        "comparison": "=",
                        "value": "female"
                    },
                    {
                        "subject": "question3",
                        "comparison": "!=",
                        "value": "skip survey"
                    }
                ]
             */
            Flexible::make('Conditions', 'conditions')
                    ->addLayout('Condition', 'condition', [
                        Select::make('Subject to match', 'subject')
                            ->options(
                                \App\Models\SurveyQuestion::whereHas('survey_page',
                                    function (Builder $query,$id = 1) {
                                                $query->where('survey_pages.survey_id', '=', $id);
                                            })->pluck('name', 'code')
                                              ->toArray()
                            ),
                        Select::make('Comparison', 'comparison')
                              ->options(
                                  [ '=' =>'Equals', '!=' => 'Does not equal']
                              )->displayUsingLabels(),
                        Text::make('Value to match'),
                        Boolean::make('Use lowercase match', 'as_lower'),
                    ])
                    ->button('Add condition'),

            Textarea::make('Notes', 'description')
                    ->help('For your notes not used on the frontend'),

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
