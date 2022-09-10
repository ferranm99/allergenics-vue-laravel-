<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static NZ()
 * @method static static AU()
 */
final class CountryLocaleEnum extends Enum
{
    const NZ = 'en_NZ';
    const AU = 'en_AU';
    const US = 'en_US';

    public static function getLocaleFromCountry(string $country): string
    {
        if(strtolower($country) === 'nz'){
            return self::NZ;
        }

        if (strtolower($country) === 'au') {
            return self::AU;
        }

        return self::US;

    }


    public static function currencyCode($locale): string
    {
        return match ($locale) {
            'en_NZ' => 'NZD',
            'en_AU' => 'AUD',
            default => 'USD',
        };
    }
}
