<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use OptimistDigital\NovaPageManager\Template;

class CtaRegionTemplate extends Template
{
    public static $type = 'region';
    public static $name = 'Cta Region';
    public static $seo = true;
    public static $view = null;

    public function fields(Request $request): array
    {
        return [
            Text::make('Cta Title')
                ->rules('required'),

            Text::make('Cta Content')
                ->rules('required'),

        ];
    }
}
