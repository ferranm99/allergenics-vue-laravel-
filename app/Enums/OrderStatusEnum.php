<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static STANDARD()
 * @method static static REORDER()
 */
final class OrderStatusEnum extends Enum
{
    const ORDER_CART  = 'Cart';
    const ORDER_NEW  = 'OrderNew';
    const ORDER_UNPAID  = 'OrderUnpaid';
    const ORDER_PAID = 'OrderPaid';
    const ORDER_PAYMENT_FAILED = 'OrderPaymentFailed';
    const ORDER_CANCELLED = 'OrderCancelled';
    const ORDER_APPROVED = 'OrderApproved';
    const ORDER_UNFULFILLED = 'OrderUnfulfilled';
    const ORDER_FULFILLED = 'OrderFulfilled';
    const ORDER_COMPLETE = 'OrderComplete';

}
