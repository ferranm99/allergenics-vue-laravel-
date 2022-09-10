<?php

namespace App\Nova;

use App\Enums\ClientTypeEnum;
use App\Enums\CountryLocaleEnum;
use App\Enums\GstRatesEnum;
use Illuminate\Http\Request;
use Laravel\Nova\Fields\BelongsTo;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use SimpleSquid\Nova\Fields\Enum\Enum;

class Price extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Price::class;

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
     * Get the fields displayed by the resource.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function fields(Request $request)
    {
        return [
            ID::make(__('ID'), 'id')->sortable(),

            BelongsTo::make('Price Group', 'price_group'),

            Enum::make('Country', 'locale' )
                ->attach(CountryLocaleEnum::class),
            Number::make('Quality', 'qty'),

            Number::make('Price ExtGST', 'price')
                  ->min(1)
                  ->max(1000)
                  ->step(0.01)
                  ->displayUsing(function ($amount) {
                      return '$'.number_format((float) $amount, 2);
                  })
                  ->sortable(),

            Text::make('GST Rate', function () {
                return GstRatesEnum::fromLocale($this->locale);
            })
                ->displayUsing(function ($amount) {
                    return number_format((float) $amount * 100, 0) .'%';
                }),


            Text::make('GST', function () {
                return $this->price * GstRatesEnum::fromLocale($this->locale);
            })
                ->displayUsing(function ($amount) {
                    return '$'.number_format((float) $amount, 2);
                }),

            Text::make('Price IncGST', function () {
                return $this->price + ( $this->price * GstRatesEnum::fromLocale($this->locale) );
                })
                ->displayUsing(function ($amount) {
                    return '$'.number_format((float) $amount, 2);
                }),


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
