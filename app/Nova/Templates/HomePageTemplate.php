<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Trix;
use Whitecube\NovaFlexibleContent\Flexible;
use OptimistDigital\NovaPageManager\Template;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;


class HomePageTemplate extends Template
{
    public static $type = 'page';
    public static $name = 'home';
    public static $seo = true;
    public static $view = null;

    public function fields(Request $request): array
    {

        $image_custom_properties = [
            Text::make('ALT Text', 'alt'),
            //Markdown::make('Description', 'description'),
        ];


        return [

            // see \App\Models\Page::registerMediaCollections fro image field name (collections)
            Images::make('Home Banner Image', 'home_banner_image') // second parameter is the media collection name
                ->withResponsiveImages()
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'), // validation rules

            Text::make('Banner Title')
                ->rules('required'),

            Text::make('Banner Subtitle')
                ->rules('required'),

            Text::make('Why Title')
                ->rules('required'),

            Trix::make('Why Content')
                ->rules('required'),

            Flexible::make('Why Column')
                ->addLayout('Column', 'wysiwyg', [

                    Text::make('Title'),
                    Text::make('Content'),

            ]),

             Text::make('Fast Title')
                ->rules('required'),

             Trix::make('Fast Content')
                ->rules('required'),

             Text::make('Start Journey Title')
                ->rules('required'),

             Trix::make('Start Journey Content')
                ->rules('required'),

             Text::make('Team Title')
                ->rules('required'),

             Trix::make('Team Content')
                ->rules('required'),

             Images::make('Team One Image', 'team_one_image') // second parameter is the media collection name
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'), // validation rules

             Trix::make('Team One Title')
                ->rules('required'),

             Trix::make('Team One Content')
                ->rules('required'),

             Images::make('Team Two Image', 'team_two_image') // second parameter is the media collection name
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'), // validation rules

             Trix::make('Team Two Title')
                ->rules('required'),

             Trix::make('Team Two Content')
                ->rules('required'),

             Images::make('Team Three Image', 'team_three_image') // second parameter is the media collection name
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'), // validation rules

             Trix::make('Team Three Title')
                ->rules('required'),

             Trix::make('Team Three Content')
                ->rules('required'),


        ];
    }
}
