<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Trix;
use OptimistDigital\NovaPageManager\Template;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;


class WhyPageTemplate extends Template
{
    public static $type = 'page';
    public static $name = 'why-page';
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
            //Images::make('Experience Image', 'experience_image') // second parameter is the media collection name
            //    ->withResponsiveImages()
            //    ->conversionOnIndexView('thumb')
            //    ->customPropertiesFields($image_custom_properties) // conversion used to display the image
            //    ->rules('required'), // validation rules

            Text::make('Experience Title')
                ->rules('required'),

            Markdown::make('Experience')
                ->rules('required'),

            Images::make('Country Image', 'country_image') // second parameter is the media collection name
                ->withResponsiveImages()
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'),// validation rules

            Text::make('Country Title')
                ->rules('required'),

            Trix::make('Country Text')
                ->rules('required'),

            Images::make('Practitioners Image', 'practitioners_image') // second parameter is the media collection name
                ->withResponsiveImages()
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'),

            Text::make('Practitioners Title')
                ->rules('required'),

            Trix::make('Practitioners')
                ->rules('required'),

            Images::make('Range Image', 'range_image') // second parameter is the media collection name
                ->withResponsiveImages()
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'),

            Text::make('Range Title')
                ->rules('required'),

            Trix::make('Range')
                ->rules('required'),

            Images::make('Reporting Image', 'reporting_image') // second parameter is the media collection name
                ->withResponsiveImages()
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'),

            Text::make('Reporting Title')
                ->rules('required'),

            Trix::make('Reporting')
                ->rules('required'),

            Images::make('Preferred Image', 'preferred_image') // second parameter is the media collection name
                ->withResponsiveImages()
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'),

            Text::make('Preferred Title')
                ->rules('required'),

            Trix::make('Preferred by')
                ->rules('required'),

            Images::make('Safety Image', 'safety_image') // second parameter is the media collection name
                ->withResponsiveImages()
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'),

            Text::make('Safety Title')
                ->rules('required'),

            Trix::make('Safety')
                ->rules('required'),

            Markdown::make('Ongoing Support')
                ->rules('required'),
        ];
    }
}
