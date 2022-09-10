<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static HUMAN()
 * @method static static PET()
 */
final class ProcessingTypeEnum extends Enum
{
    const URGENT = 'URGENT';// 1day
    const FAST = 'FAST'; // 3days
    const STANDARD = 'STANDARD'; // 10days

    public static function price($value){
        switch ($value){
            case 'URGENT':
                return 100.00;
                break;
            case 'FAST':
                return 50.00;
                break;
            case 'STANDARD':
                return 0.00;
                break;
        }
    }
}
