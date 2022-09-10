<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static PUBLIC()
 * @method static static PRACTITIONER()
 * @method static static ADMIN()
 */
final class UserTypeEnum extends Enum
{
    const PUBLIC = 'PUBLIC';
    const PRACTITIONER = 'PRACTITIONER';
    const ADMIN = 'ADMIN';
}
