<?php

namespace App\Models;

use App\Enums\CountryLocaleEnum;
use Illuminate\Database\Eloquent\Model;

class Price extends Model
{
    protected $table = 'prices';

    protected $fillable = [
        'id',
        'price_group_id',
        'qty',
        'locale',
        'price'
    ];

    protected $casts = [
        'locale' => CountryLocaleEnum::class
    ];

    public function price_group(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(PriceGroup::class);
    }


}
