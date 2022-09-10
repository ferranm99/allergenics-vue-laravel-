<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Table name
    |--------------------------------------------------------------------------
    |
    | Set a custom table for Nova Page Manager to store its data.
    |
    */

    'table' => 'content',


    /*
    |--------------------------------------------------------------------------
    | Templates
    |--------------------------------------------------------------------------
    |
    | Register all templates (for both pages and regions) here.
    |
    */

    'templates' => [
        \App\Nova\Templates\BaseRegionTemplate::class,
        \App\Nova\Templates\PricingRegionTemplate::class,
        \App\Nova\Templates\TestimonialsRegionTemplate::class,
        \App\Nova\Templates\BlogRegionTemplate::class,
        \App\Nova\Templates\CtaRegionTemplate::class,
        \App\Nova\Templates\ContactRegionTemplate::class,
        \App\Nova\Templates\TestsRegionTemplate::class,
        \App\Nova\Templates\WhyPageTemplate::class,
        \App\Nova\Templates\HomePageTemplate::class,
        \App\Nova\Templates\TestsPageTemplate::class,
        \App\Nova\Templates\FoodPageTemplate::class,
        \App\Nova\Templates\NutritionPageTemplate::class,
        \App\Nova\Templates\WomensPageTemplate::class,
        \App\Nova\Templates\MensPageTemplate::class,
        \App\Nova\Templates\SleepPageTemplate::class,
        \App\Nova\Templates\FaqsPageTemplate::class,
        \App\Nova\Templates\HairSamplePageTemplate::class,
    ],


    /*
    |--------------------------------------------------------------------------
    | Locales
    |--------------------------------------------------------------------------
    |
    | Set all the available locales as [key => name] pairs.
    |
    | For example ['en_US' => 'English'].
    |
    */

    'locales' => [
        'en_NZ' => 'NZ',
        'en_AU' => 'AU'
    ],


    /*
    |--------------------------------------------------------------------------
    | Max locales shown on index
    |--------------------------------------------------------------------------
    |
    | Sets the number of locales shown on index. If the number of locales
    | exceeds the defined count, the locales will be shown only on the detail
    | view.
    |
    */

    'max_locales_shown_on_index' => 2,


    /*
    |--------------------------------------------------------------------------
    | Overwrite the page resource with a custom implementation
    |--------------------------------------------------------------------------
    |
    | Add a custom implementation of the Page resource.
    |
    | Return false if you want to disable the Page resource
    | and hide it from the sidebar.
    |
    */

    'page_resource' => null,


    /*
    |--------------------------------------------------------------------------
    | Overwrite the page model with a custom implementation
    |--------------------------------------------------------------------------
    |
    | Add a custom implementation of the Page model.
    |
    */

    'page_model' => \App\Models\Page::class,


    /*
    |--------------------------------------------------------------------------
    | Overwrite the region resource with a custom implementation
    |--------------------------------------------------------------------------
    |
    | Add a custom implementation of the Region resource.
    |
    | Return false if you want to disable the Region resource
    | and hide it from the sidebar.
    |
    */

    'region_resource' => null,


    /*
    |--------------------------------------------------------------------------
    | Overwrite the region model with a custom implementation
    |--------------------------------------------------------------------------
    |
    | Add a custom implementation of the Region model.
    |
    */

    'region_model' => \App\Models\Region::class,

    /*
    |--------------------------------------------------------------------------
    | Overwrite seo fields with a custom implementation
    |--------------------------------------------------------------------------
    |
    | Add a custom implementation of seo fields.
    |
    | When $seo is assigned as true in template class this custom array of
    | fields will be displayed in resource view instead of the default one.
    |
    */

    'seo_fields' => null,


    /*
    |--------------------------------------------------------------------------
    | Page URL
    |--------------------------------------------------------------------------
    |
    | If a closure is specified, a link to the page is shown next to
    | the page slug. The closure accepts a Page model as a paramater.
    |
    | Set to `null` if the link should not be displayed.
    |
    | Closure example:
    | function (Page $page) {
    |   return env('FRONTEND_URL') . '/' . $page->path;
    | }
    |
    */

    'page_url' => null,


    /*
    |--------------------------------------------------------------------------
    | Page path
    |--------------------------------------------------------------------------
    |
    | If a closure is specified, you can modify the page path before
    | it's finalized.
    |
    | The closure will be called with parameters (Page $page, $path).
    |
    | An example usecase is when you want to add a locale prefix to non-default
    | locale pages.
    |
    | Set to `null` if you do not wish to modify page paths.
    |
    */

    'page_path' => null,
];
