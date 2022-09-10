<?php

namespace App\Models;

use NovaPageManagerCache;
use OptimistDigital\NovaPageManager\NovaPageManager;
use OptimistDigital\NovaPageManager\Models\TemplateModel;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use OptimistDigital\NovaPageManager\Models\Page as PageManagerPage;
use Illuminate\Database\Eloquent\Casts\Attribute;

class Page extends PageManagerPage implements HasMedia
{
    use InteractsWithMedia;

    protected $appends = [
        'path'
    ];

    public function __construct(array $attributes = [])
    {
        parent::__construct($attributes);
        $this->setTable(NovaPageManager::getPagesTableName());
    }

    protected static function boot()
    {
        parent::boot();

        static::deleting(function ($template) {
            // Is a parent template
            if ($template->parent_id === null) {
                // Find child templates
                $childTemplates = NovaPageManager::getPageModel()::where('parent_id', '=', $template->id)->get();
                if (count($childTemplates) === 0) return;

                // Set their parent to null
                $childTemplates->each(function ($template) {
                    $template->update(['parent_id' => null]);
                });
            }
        });

        static::updated(function () {
            NovaPageManagerCache::clear();
        });
    }

    public function parent()
    {
        return $this->belongsTo(NovaPageManager::getPageModel());
    }

    public function getParentAttribute()
    {
        if ($this->relationLoaded('parent')) {
            return $this->getRelationValue('parent');
        }

        $parent = NovaPageManagerCache::find($this->parent_id);

        $this->setRelation('parent', $parent);

        return $parent;
    }

    public function childDraft()
    {
        return $this->hasOne(NovaPageManager::getPageModel(), 'draft_parent_id', 'id');
    }

    public function getChildDraftAttribute()
    {
        if ($this->relationLoaded('child_draft')) {
            return $this->getRelationValue('child_draft');
        }

        $childDraft = NovaPageManagerCache::whereChildDraft($this->id);

        $this->setRelation('child_draft', $childDraft);

        return $childDraft;
    }

    public function localeParent()
    {
        return $this->belongsTo(NovaPageManager::getPageModel());
    }

    public function getLocaleParentAttribute()
    {
        if ($this->relationLoaded('locale_parent')) {
            return $this->getRelationValue('locale_parent');
        }

        $localeParent = NovaPageManagerCache::find($this->locale_parent_id);

        $this->setRelation('locale_parent', $localeParent);

        return $localeParent;
    }

    public function isDraft()
    {
        return isset($this->preview_token) ? true : false;
    }

    public function getPathAttribute()
    {
        $localeParent = $this->localeParent;
        $isLocaleChild = $localeParent !== null;
        $pathFinderPage = $isLocaleChild ? $localeParent : $this;
        if (!isset($pathFinderPage->parent)) return NovaPageManager::getPagePath($this, $this->normalizePath($this->slug));

        $parentSlugs = [];
        $parent = $pathFinderPage->parent;
        while (isset($parent)) {
            if ($isLocaleChild) {
                $localizedPage = NovaPageManager::getPageModel()::where('locale_parent_id', $parent->id)->where('locale', $this->locale)->first();
                $parentSlugs[] = $localizedPage !== null ? $localizedPage->slug : $parent->slug;
            } else {
                $parentSlugs[] = $parent->slug;
            }
            $parent = $parent->parent;
        }
        $parentSlugs = array_reverse($parentSlugs);

        $normalizedPath = $this->normalizePath(implode('/', $parentSlugs) . "/" . $this->slug);

        return NovaPageManager::getPagePath($this, $normalizedPath);
    }

    protected function normalizePath($path)
    {
        if (empty($path)) return null;
        if ($path[0] !== '/') $path = "/$path";
        if (strlen($path) > 1 && substr($path, -1) === '/') $path = substr($path, 0, -1);
        return preg_replace('/[\/]+/', '/', $path);
    }

    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
             ->width(130)
             ->height(130);
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function homeBannerImage(): Attribute
    {
        if(!$this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(
            get: function(){
                return $this->getMedia('data->home_banner_image')
                            ->first();
            }
        );
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function teamOneImage(): Attribute
    {
        if(!$this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(
            get: function(){
                return $this->getMedia('data->team_one_image')
                            ->first();
            }
        );
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function teamTwoImage(): Attribute
    {
        if(!$this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(
            get: function(){
                return $this->getMedia('data->team_two_image')
                            ->first();
            }
        );
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function teamThreeImage(): Attribute
    {
        if(!$this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(
            get: function(){
                return $this->getMedia('data->team_three_image')
                            ->first();
            }
        );
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function experienceImage(): Attribute
    {
        if(!$this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(
            get: function(){
                return $this->getMedia('data->experience_image')
                            ->first();
            }
        );
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function countryImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
                return $this->getMedia('data->country_image')
                            ->first();
            });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function practitionersImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->practitioners_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function rangeImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->range_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function reportingImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->reporting_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function preferredImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->preferred_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function safetyImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->safety_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function foodBannerImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->food_banner_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function foodWhoImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->food_who_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function foodWhatResultsImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->food_what_results_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function foodDownloadSamplePdf(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->food_download_sample_pdf')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function foodNextStepsImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->food_next_steps_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function nutritionBannerImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->nutrition_banner_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function nutritionWhoImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->nutrition_who_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function nutritionWhatResultsImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->nutrition_what_results_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function nutritionDownloadSamplePdf(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->nutrition_download_sample_pdf')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function nutritionNextStepsImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->nutrition_next_steps_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function womensBannerImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->womens_banner_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function womensWhoImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->womens_who_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function womensWhatResultsImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->womens_what_results_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function womensDownloadSamplePdf(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->womens_download_sample_pdf')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function womensNextStepsImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->womens_next_steps_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function mensBannerImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->mens_banner_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function mensWhoImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->mens_who_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function mensWhatResultsImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->mens_what_results_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function mensDownloadSamplePdf(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->mens_download_sample_pdf')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function mensNextStepsImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->mens_next_steps_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function sleepBannerImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->sleep_banner_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function sleepWhoImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->sleep_who_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function sleepWhatResultsImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->sleep_what_results_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function sleepDownloadSamplePdf(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->sleep_download_sample_pdf')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function sleepNextStepsImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->sleep_next_steps_image')
                        ->first();
        });
    }

    /**
     * Get the user's first name.
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */
    protected function hairSampleImage(): Attribute
    {
        if (! $this->relationLoaded('media')) {
            $this->load(['media']);
        }

        return Attribute::make(get: function () {
            return $this->getMedia('data->hair_sample_image')
                        ->first();
        });
    }


    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('home_banner_image')
             ->singleFile();
        $this->addMediaCollection('team_one_image')
             ->singleFile();
        $this->addMediaCollection('team_two_image')
             ->singleFile();
        $this->addMediaCollection('team_three_image')
             ->singleFile();

        $this->addMediaCollection('experience_image')
             ->singleFile();
        $this->addMediaCollection('country_image')
             ->singleFile();
        $this->addMediaCollection('practitioners_image')
             ->singleFile();
        $this->addMediaCollection('range_image')
             ->singleFile();
        $this->addMediaCollection('reporting_image')
             ->singleFile();
        $this->addMediaCollection('preferred_image')
             ->singleFile();
        $this->addMediaCollection('safety_image')
             ->singleFile();

        $this->addMediaCollection('food_banner_image')
             ->singleFile();
        $this->addMediaCollection('food_who_image')
             ->singleFile();
        $this->addMediaCollection('food_what_results_image')
             ->singleFile();
        $this->addMediaCollection('food_download_sample_pdf')
             ->singleFile();
        $this->addMediaCollection('food_next_steps_image')
             ->singleFile();

        $this->addMediaCollection('nutrition_banner_image')
             ->singleFile();
        $this->addMediaCollection('nutrition_who_image')
             ->singleFile();
        $this->addMediaCollection('nutrition_what_results_image')
             ->singleFile();
        $this->addMediaCollection('nutrition_download_sample_pdf')
             ->singleFile();
        $this->addMediaCollection('nutrition_next_steps_image')
             ->singleFile();

        $this->addMediaCollection('womens_banner_image')
             ->singleFile();
        $this->addMediaCollection('womens_who_image')
             ->singleFile();
        $this->addMediaCollection('womens_what_results_image')
             ->singleFile();
        $this->addMediaCollection('womens_download_sample_pdf')
             ->singleFile();
        $this->addMediaCollection('womens_next_steps_image')
             ->singleFile();

        $this->addMediaCollection('mens_banner_image')
             ->singleFile();
        $this->addMediaCollection('mens_who_image')
             ->singleFile();
        $this->addMediaCollection('mens_what_results_image')
             ->singleFile();
        $this->addMediaCollection('mens_download_sample_pdf')
             ->singleFile();
        $this->addMediaCollection('mens_next_steps_image')
             ->singleFile();

        $this->addMediaCollection('sleep_banner_image')
             ->singleFile();
        $this->addMediaCollection('sleep_who_image')
             ->singleFile();
        $this->addMediaCollection('sleep_what_results_image')
             ->singleFile();
        $this->addMediaCollection('sleep_download_sample_pdf')
             ->singleFile();
        $this->addMediaCollection('sleep_next_steps_image')
             ->singleFile();

        $this->addMediaCollection('hair_sample_image')
             ->singleFile();
    }
}
