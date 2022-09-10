<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static FEMALE()
 * @method static static MALE()
 * @method static static ANY()
 */
final class ProductGenderEnum extends Enum
{
    const FEMALE = 'FEMALE';
    const MALE = 'MALE';
    const ANY = 'ANY';

}
