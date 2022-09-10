<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use OptimistDigital\NovaPageManager\Template;

class BaseRegionTemplate extends Template
{
    public static $type = 'region';
    public static $name = 'Base Region';
    public static $seo = true;
    public static $view = null;

    public function fields(Request $request): array
    {
        return [
            Trix::make('Test Title'),

            Trix::make('Test Tests'),

        ];
    }
}
