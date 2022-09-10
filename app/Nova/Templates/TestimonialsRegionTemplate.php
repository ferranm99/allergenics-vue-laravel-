<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use OptimistDigital\NovaPageManager\Template;
use Whitecube\NovaFlexibleContent\Flexible;

class TestimonialsRegionTemplate extends Template
{
    public static $type = 'region';
    public static $name = 'Testimonials Region';
    public static $seo = true;
    public static $view = null;

    public function fields(Request $request): array
    {
        return [
            Text::make('Testimonials Page Title')
                ->rules('required'),

            Text::make('Testimonials Section Title')
                ->rules('required'),

             Flexible::make('Testimonials Slide')
                ->addLayout('Testimonials', 'wysiwyg', [
                    Trix::make('Content'),
                    Text::make('Name'),
                    Text::make('City'),
                    Text::make('Date'),
            ]),

        ];
    }
}
