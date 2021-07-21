<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 14/10/2016
 * Time: 10:37
 */

namespace Sdk\Order;

abstract class ProductConditionEnum
{
    public const NewS = 'New';
    public const Refurbished = 'Refurbished';
    public const LikeNew = 'LikeNew';
    public const VeryGoodState = 'VeryGoodState';
    public const GoodState = 'GoodState';
    public const AverageState = 'AverageState';
}
