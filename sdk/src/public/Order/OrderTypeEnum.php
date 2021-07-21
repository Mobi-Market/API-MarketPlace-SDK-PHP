<?php

declare(strict_types=1);

/*
 * Created by Cdiscount
 * Date : 18/01/2017
 * Time : 15:46
 */

namespace Sdk\Order;

abstract class OrderTypeEnum
{
    public const IsFulfillment = 'IsFulfillment';
    public const MKPFBC = 'MKPFBC';
    public const EXTFBC = 'EXTFBC';
    public const None = 'None';
}
