<?php

namespace App\Nova\Templates;

use Illuminate\Http\Request;
use Laravel\Nova\Fields\Text;
use Laravel\Nova\Fields\Trix;
use Laravel\Nova\Fields\File;
use OptimistDigital\NovaPageManager\Template;
use Ebess\AdvancedNovaMediaLibrary\Fields\Images;


class MensPageTemplate extends Template
{
    public static $type = 'page';
    public static $name = 'mens-page';
    public static $seo = true;
    public static $view = null;

    public function fields(Request $request): array
    {
      $image_custom_properties = [
            Text::make('ALT Text', 'alt'),
            //Markdown::make('Description', 'description'),
        ];

        return [

            Text::make('Banner Overlay')
                ->rules('required'),

            Images::make('Mens Banner Image', 'mens_banner_image') // second parameter is the media collection name
                ->withResponsiveImages()
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'),// validation rules

            Text::make('Mens Title')
                ->rules('required'),

            Trix::make('Mens Content')
                ->rules('required'),

            Text::make('Who Should Test')
                ->rules('required'),

            Images::make('Mens Who Image', 'mens_who_image') // second parameter is the media collection name
                ->withResponsiveImages()
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'),// validation rules

            Trix::make('Who Should Content')
                ->rules('required'),

            Trix::make('Who Should List')
                ->rules('required'),

            Text::make('What Results Tell')
                ->rules('required'),

            Images::make('Mens What Results Image', 'mens_what_results_image') // second parameter is the media collection name
                ->withResponsiveImages()
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'),// validation rules

            Trix::make('What Results Content')
                ->rules('required'),

            Trix::make('What Results List')
                ->rules('required'),

            File::make('Test PDF', 'test_pdf')
                ->disk('public')
                ->storeAs(function (Request $request) {
                    // works out it adds the original extension, but its not shown on admin
                    return \Str::slug($request->get('name', '-'));
                    //return $request->attachment->getClientOriginalName();
                }),

            Text::make('Next Steps')
                ->rules('required'),

            Images::make('Mens Next Steps Image', 'mens_next_steps_image') // second parameter is the media collection name
                ->withResponsiveImages()
                ->conversionOnIndexView('thumb')
                ->customPropertiesFields($image_custom_properties) // conversion used to display the image
                ->rules('required'),// validation rules

            Trix::make('Next Steps Content')
                ->rules('required'),

            Trix::make('Next Steps List')
                ->rules('required'),

            Trix::make('Full List Tested')
                ->rules('required'),
        ];
    }
}
