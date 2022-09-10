<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static STRIPE()
 * @method static static POLIPAY()
 * @method static static ACCOUNT()
 *
 */
final class OrderPaymentMethodEnum extends Enum
{
    const STRIPE  = 'stripe';
    const POLIPAY  = 'polipay';
    const ACCOUNT  = 'account';


}
