<?php

namespace App\Nova;

use App\Enums\ClientTypeEnum;
use App\Enums\UserTypeEnum;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Illuminate\Http\Request;
use Illuminate\Mail\Markdown;
use Laravel\Nova\Fields\Boolean;
use Laravel\Nova\Fields\HasMany;
use Laravel\Nova\Fields\HasOne;
use Laravel\Nova\Fields\Hidden;
use Laravel\Nova\Fields\ID;
use Laravel\Nova\Fields\Number;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Textarea;
use Laravel\Nova\Http\Requests\NovaRequest;
use OptimistDigital\MultiselectField\Multiselect;
use SimpleSquid\Nova\Fields\Enum\Enum;

class Product extends Resource
{
    /**
     * The model the resource corresponds to.
     *
     * @var string
     */
    public static $model = \App\Models\Product::class;

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
        return [
            ID::make(__('ID'), 'id')->sortable(),

            Text::make('Name', 'name'),
            Text::make('SKU', 'sku'),

            Images::make('Experience image', 'images') // second parameter is the media collection name
                    ->conversionOnIndexView('thumb') // conversion used to display the image
                    ->customPropertiesFields([
                            Text::make('image_field')
                                  ->default('experience_image')
                        ])
                    ->rules('required'),
            // validation rules

            //Multiselect::make('Price Groups', 'price_group')
            //           ->belongsTo(\App\Nova\PriceGroup::class, false)
            //        ->singleSelect(),

            Enum::make('User Type', 'user_type')
                ->attach(UserTypeEnum::class),
            Enum::make('Client Type', 'client_type')
                ->attach(ClientTypeEnum::class),

            Textarea::make('Description', 'description'),




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
