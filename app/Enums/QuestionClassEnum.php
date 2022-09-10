<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static HUMAN()
 * @method static static PET()
 */
final class QuestionClassEnum extends Enum
{
    const HUMAN = 'HUMAN';
    const PET = 'PET';
}
