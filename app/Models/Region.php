<?php

namespace App\Models;

use NovaPageManagerCache;
use OptimistDigital\NovaPageManager\NovaPageManager;
use OptimistDigital\NovaPageManager\Models\TemplateModel;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;


class Region extends TemplateModel implements HasMedia
{
    use InteractsWithMedia;

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setTable(NovaPageManager::getRegionsTableName());
    }

    protected static function boot()
    {
        parent::boot();

        static::updated(function () {
            NovaPageManagerCache::clear();
        });
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
             ->width(130)
             ->height(130);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('blog_image');
    }


}
