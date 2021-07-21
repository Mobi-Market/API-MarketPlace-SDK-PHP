<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 18/10/2016
 * Time: 15:38
 */

namespace Sdk\Order\Refund;

abstract class RefundMotiveEnum
{
    public const ClientClaim  = 'ClientClaim';
    public const VendorInitiatedRefund  = 'VendorInitiatedRefund';
    public const ClientRetraction = 'ClientRetraction';
}
