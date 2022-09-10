<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static NZ()
 * @method static static AU()
 * @method static static US()
 */
final class GstRatesEnum extends Enum
{
    const NZ = 0.15;
    const AU = 0.10;
    const US = 0;

    public static function fromLocale(CountryLocaleEnum $locale): float{
        if($locale->is(CountryLocaleEnum::NZ)){
            return self::NZ;
        }
        else if ($locale->is( CountryLocaleEnum::AU) ) {
            return self::AU;
        }

        return self::US;
    }

}
