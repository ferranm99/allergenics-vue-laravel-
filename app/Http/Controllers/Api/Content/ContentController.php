<?php

namespace App\Http\Controllers\Api\Content;

use App\Models\Page;
use App\Models\Product;
use App\Models\Region;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Resources\ContentPage as ContentPageResource;
use App\Http\Resources\ContentRegion as ContentRegionResource;



class ContentController extends Controller
{
    public function home()
    {
        $page = Page::with('media')
                    ->find(config('allergenics.home_page_id'));

        return new ContentPageResource($page);
    }
    public function show(string $country, Page $page){

        $page = Page::with('media')->find($page->id);

        ray($page);

        return new ContentPageResource($page);

    }

    public function region(string $country, Region $region)
    {
        return new ContentRegionResource($region);
    }

}
