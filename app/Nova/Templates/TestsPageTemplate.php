<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\File;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use OptimistDigital\NovaPageManager\Template;


class TestsPageTemplate extends Template
{
    public static $type = 'page';
    public static $name = 'tests-page';
    public static $seo = true;
    public static $view = null;

    public function fields(Request $request): array
    {
        return [

            Text::make('Main Title')
                ->rules('required'),

            Trix::make('Hair Testing Content')
                ->rules('required'),

            Text::make('Learn More Title')
                ->rules('required'),

            Trix::make('Learn More Content')
                ->rules('required'),

            Text::make('Immediate Title')
                ->rules('required'),

            Trix::make('Immediate Content')
                ->rules('required'),

            Text::make('Healthcare Professionals Title')
                ->rules('required'),

            Trix::make('Healthcare Professionals Content')
                ->rules('required')
        ];
    }
}
