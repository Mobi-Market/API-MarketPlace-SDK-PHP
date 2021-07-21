<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 14/10/2016
 * Time: 09:42
 */

namespace Sdk\Order;

abstract class OrderStatusEnum
{
    public const NonValidated = 'NonValidated';
    public const NoPaymentAttempt = 'NoPaymentAttempt';
    public const Cancelled = 'Cancelled';
    public const Validated = 'Validated';
    public const Waiting = 'Waiting';
    public const Completed = 'Completed';
    public const None = 'None';
}
