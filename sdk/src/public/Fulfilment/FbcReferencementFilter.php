<?php

declare(strict_types=1);
/*
 * Created by Cdiscount
 * Date : 24/04/2017
 * Time : 15:02
 */

namespace Sdk\Fulfilment;

abstract class FbcReferencementFilter
{
    public const All = 'All';
    public const OnlyReferenced = 'OnlyReferenced';
    public const OnlyNotReferenced = 'OnlyNotReferenced';
}
