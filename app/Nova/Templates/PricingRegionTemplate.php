<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\Markdown;
use OptimistDigital\NovaPageManager\Template;
use Whitecube\NovaFlexibleContent\Flexible;

class PricingRegionTemplate extends Template
{
    public static $type = 'region';
    public static $name = 'Pricing Region';
    public static $seo = true;
    public static $view = null;

    public function fields(Request $request): array
    {
        return [
            Text::make('Price Plans Title')
                ->rules('required'),

            Trix::make('Plans Content')
                ->rules('required'),

             Flexible::make('Pricing Columns')
                ->addLayout('Pricing column section', 'wysiwyg', [
                    Trix::make('Columns Content'),
                    Text::make('Full Price'),
                    Text::make('Discount Price'),
            ]),

        ];
    }
}
