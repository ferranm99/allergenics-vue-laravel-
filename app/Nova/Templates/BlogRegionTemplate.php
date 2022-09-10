<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Image;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use OptimistDigital\NovaPageManager\Template;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;
use Whitecube\NovaFlexibleContent\Flexible;


class BlogRegionTemplate extends Template
{

    public static $type = 'region';
    public static $name = 'Blog Region';
    public static $seo = true;
    public static $view = null;

    public function fields(Request $request): array
    {
         $image_custom_properties = [
            Text::make('ALT Text', 'alt'),
        ];

        return [
            Text::make('Blog Page Title')
                ->rules('required'),

            Text::make('Blog Page Text')
                ->rules('required'),

             Flexible::make('Blog Post')
                ->addLayout('Blog', 'wysiwyg', [
                    Text::make('Title'),
                    Text::make('Author'),
                    Image::make('Blog Image', 'blog_image')
                        ->storeOriginalName('blog_image'),
                    Trix::make('Content'),
            ]),

        ];
    }
}
