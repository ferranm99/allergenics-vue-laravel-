<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use OptimistDigital\NovaPageManager\Template;

class ContactRegionTemplate extends Template
{
    public static $type = 'region';
    public static $name = 'Contact Region';
    public static $seo = true;
    public static $view = null;

    public function fields(Request $request): array
    {
        return [
            Trix::make('Contact General'),

            Trix::make('Contact Post'),

            Trix::make('Contact Courier'),

            Trix::make('Success Address Note'),

        ];
    }
}
