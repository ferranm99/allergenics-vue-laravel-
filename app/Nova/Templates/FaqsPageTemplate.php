<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Markdown;
use Laravel\Nova\Fields\Trix;
use Whitecube\NovaFlexibleContent\Flexible;
use OptimistDigital\NovaPageManager\Template;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;


class FaqsPageTemplate extends Template
{
    public static $type = 'page';
    public static $name = 'faqs-page';
    public static $seo = true;
    public static $view = null;

    public function fields(Request $request): array
    {

        $image_custom_properties = [
            Text::make('ALT Text', 'alt'),
            //Markdown::make('Description', 'description'),
        ];


        return [

            Text::make('Faqs Title')
                ->rules('required'),

            Trix::make('Faqs Content')
                ->rules('required'),

            Text::make('Hair Sample')
                ->rules('required'),

            Flexible::make('Faqs Hair Row')
                ->addLayout('Row', 'wysiwyg', [

                    Text::make('Question'),
                    Trix::make('Answer'),
            ]),

            Text::make('Food Questions')
                ->rules('required'),

            Flexible::make('Faqs Food Row')
                ->addLayout('Row', 'wysiwyg', [

                    Text::make('Question'),
                    Trix::make('Answer'),
            ]),

        ];
    }
}
