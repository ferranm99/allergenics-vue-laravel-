<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Markdown;
use OptimistDigital\NovaPageManager\Template;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;

class TestsRegionTemplate extends Template
{
    public static $type = 'region';
    public static $name = 'Tests Region';
    public static $seo = true;
    public static $view = null;

    public function fields(Request $request): array
    {
       $image_custom_properties = [
                Text::make('ALT Text', 'alt'),
                //Markdown::make('Description', 'description'),
            ];

        return [
            Text::make('Food Img Overlay')
                ->rules('required'),

            Trix::make('Food Content')
                ->rules('required'),

            Text::make('Nutrition Img Overlay')
                ->rules('required'),

            Trix::make('Nutrition Content')
                ->rules('required'),

            Text::make('Womens Img Overlay')
                ->rules('required'),

            Trix::make('Womens Content')
                ->rules('required'),

            Text::make('Mens Img Overlay')
                ->rules('required'),

            Trix::make('Mens Content')
                ->rules('required'),

            Text::make('Sleep Img Overlay')
                ->rules('required'),

            Trix::make('Sleep Content')
                ->rules('required'),

            Text::make('Improve Life Title')
                ->rules('required'),

            Trix::make('Improve Life Content')
                ->rules('required'),

        ];
    }
}
