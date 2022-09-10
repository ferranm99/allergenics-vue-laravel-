<?php

namespace App\Models;

use App\Enums\ClientTypeEnum;
use App\Enums\UserTypeEnum;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia;
use Spatie\MediaLibrary\InteractsWithMedia;
use Spatie\MediaLibrary\MediaCollections\Models\Media;

class Product extends Model implements HasMedia
{
    use InteractsWithMedia;

    protected $fillable = [
        'id',
        'price_group_id',
        'sku',
        'user_type',
        'client_type',
        'name',
        'description',
        'tax_percent_nzd',
        'tax_percent_aud',
        'tax_percent_usd'
    ];

    protected $casts = [
            'user_type' => UserTypeEnum::class,
            'client_type' => ClientTypeEnum::class
    ];

    #########################################################
    ## Utilities
    ##
    //public function price(int $qty, $including_gst = false)
    //{
    //    if ($including_gst) {
    //        return (float) $this->prices()
    //                            ->firstWhere('qty', $qty)->price_inc;
    //    }
    //
    //    return (float) $this->prices()
    //                        ->firstWhere('qty', $qty)->price;
    //}

    #########################################################
    ## Accessors
    ##

    public function price(): Attribute
    {

        return Attribute::make(get: fn(
            $value,
            $attributes
        ) => (float) $this->prices()->firstWhere('qty', 1)->price);
    }



    public function pricelist() : Attribute
    {
        return Attribute::make(get: function(
            $value,
            $attributes
        ) {
            $inc = $this->prices()
                        ->firstWhere('qty', 1)->price_inc;

            $ex = $this->prices()
                        ->firstWhere('qty', 1)->price;


            return [
                'ex'  => (float) $ex,
                'inc' => (float) $inc,
                'tax' => (float) round($inc - $ex,2)
            ];
        });
    }

    public function tax(): Attribute
    {
        return Attribute::make(get: function (
            $value,
            $attributes
        ) {
            return (float) ($this->prices()
                        ->firstWhere('qty', 1)->tax_percent / 100);
        });
    }

    public function taxAmount(): Attribute
    {
        return Attribute::make(get: function (
            $value,
            $attributes
        ) {
            $inc = $this->prices()
                        ->firstWhere('qty', 1)->price_inc;

            $ex = $this->prices()
                       ->firstWhere('qty', 1)->price;

            return (float) round($inc - $ex, 2);
        });
    }

    public function taxable(): Attribute
    {
        return Attribute::make(get: function (
            $value,
            $attributes
        ) {
            return true;
        });
    }


    /**
     * get the customers' checksum_attributes' checksum for use with
     * the import to see if the current data matches the imported data
     *
     * @return \Illuminate\Database\Eloquent\Casts\Attribute
     */

    /*public function checksum(): Attribute
    {

        $check_string = '';
        foreach ($this->checksum_attributes as $attribute => $accredo_attribute) {
            $check_string .= $this->attributes[$attribute] ?? '';
        }

        return Attribute::make(get: fn(
            $value,
            $attributes
        ) => md5($check_string));
    }*/

    #########################################################
    ## Scopes
    ##

    /**
     * Scope to find by the  product_code
     *
     * @param Builder $query
     * @param string $product_code
     * @return Builder
     */
    public function scopeWithLocale(Builder $query, string $locale): Builder
    {
        return $query->where('locale', $locale);
    }



    #########################################################
    ## Relations
    ##
    public function price_group(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {

        return $this->belongsTo(
            PriceGroup::class,
            'price_group_id',
            'id','price_groups');
    }

    public function prices(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
       return $this->hasMany(Price::class, 'product_id')
                    ->join('products', 'prices.product_id', '=', 'products.id')
                    ->join('price_groups', 'prices.price_group_id', '=', 'price_groups.id')
                    ->select(
                        'products.*',
                                 'price_groups.name as price_group_name',
                                 'price_groups.currency as currency',
                                 'price_groups.tax_percent as tax_percent',
                                 'prices.qty as qty',
                                 'prices.price as price',
                                 \DB::raw('cast( round( ((( tax_percent / 100) * price) + price), 2) as DECIMAL(10,2)) as price_inc')
                    )
                   ->where('products.locale','=', $this->attributes['locale'] ?? session('locale') );
    }


    #########################################################
    ## Media
    ##
    public function registerMediaConversions(Media $media = null): void
    {
        $this->addMediaConversion('thumb')
             ->width(130)
             ->height(130);
    }

    public function registerMediaCollections(): void
    {
        $this->addMediaCollection('main')
             ->singleFile();
        $this->addMediaCollection('images');
    }

}
