<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Trix;
use OptimistDigital\NovaPageManager\Template;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;


class HairSamplePageTemplate extends Template
{
    public static $type = 'page';
    public static $name = 'hair-sample-page';
    public static $seo = true;
    public static $view = null;

    public function fields(Request $request): array
    {

        $image_custom_properties = [
            Text::make('ALT Text', 'alt'),
            //Markdown::make('Description', 'description'),
        ];


        return [

            Text::make('Hair Sample Title')
                ->rules('required'),

            Trix::make('Hair Sample Content')
                ->rules('required'),

            Images::make('Hair Sample Image', 'hair_sample_image') // second parameter is the media collection name
                ->withResponsiveImages()
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'),// validation rules

        ];
    }
}
