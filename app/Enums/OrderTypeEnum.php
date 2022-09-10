<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static STANDARD()
 * @method static static REORDER()
 */
final class OrderTypeEnum extends Enum
{
    const STANDARD = 'STANDARD';
    const REORDER = 'REORDER';
}
