<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PriceGroup extends Model
{
    protected $table = 'price_groups';


    public function prices(): \Illuminate\Database\Eloquent\Relations\HasMany
    {
        return $this->hasMany(Price::class );
    }



}
