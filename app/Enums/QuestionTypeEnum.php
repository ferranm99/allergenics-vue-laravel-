<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static HUMAN()
 * @method static static PET()
 */
final class QuestionTypeEnum extends Enum
{
    /*
     question_type
        "CHECKBOX"
        "DATE"
        "EMAIL"
        "NUMBERSELECT"
        "RADIOGROUP"
        "TEXT"
        "TEXTAREA"
     */

    const CHECKBOX = 'CHECKBOX';
    const DATE = 'DATE';
    const EMAIL = 'EMAIL';
    const NUMBERSELECT = 'NUMBERSELECT';
    const RADIOGROUP = 'RADIOGROUP';
    const TEXT = 'TEXT';
    const TEXTAREA = 'TEXTAREA';

}
