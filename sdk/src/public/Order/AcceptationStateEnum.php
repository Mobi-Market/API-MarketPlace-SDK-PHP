<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 14/10/2016
 * Time: 10:24
 */

namespace Sdk\Order;

class AcceptationStateEnum
{
    public const AcceptedBySeller = 'AcceptedBySeller';
    public const RefusedBySeller = 'RefusedBySeller';
    public const ShippedBySeller = 'ShippedBySeller';
    public const ShipmentRefusedBySeller = 'ShipmentRefusedBySeller';
    public const CancelledBeforeNotificationByCustomer = 'CancelledBeforeNotificationByCustomer';
    public const CancelledBeforePaymentByCustomer = 'CancelledBeforePaymentByCustomer';
    public const CancellationRequestPending = 'CancellationRequestPending';
}
