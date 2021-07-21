<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 11/10/2016
 * Time: 10:03
 */

namespace Sdk\Order;

abstract class OrderStateEnum
{
    public const CancelledByCustomer = 'CancelledByCustomer';
    public const WaitingForSellerAcceptation = 'WaitingForSellerAcceptation';
    public const AcceptedBySeller = 'AcceptedBySeller';
    public const PaymentInProgress = 'PaymentInProgress';
    public const WaitingForShipmentAcceptation = 'WaitingForShipmentAcceptation';
    public const Shipped = 'Shipped';
    public const RefusedBySeller = 'RefusedBySeller';
    public const AutomaticCancellation = 'AutomaticCancellation';
    public const PaymentRefused = 'PaymentRefused';
    public const ShipmentRefusedBySeller = 'ShipmentRefusedBySeller';
    public const None = 'None';
    public const ValidatedFianet = 'ValidatedFianet';
    public const RefusedNoShipment = 'RefusedNoShipment';
    public const AvailableOnStore = 'AvailableOnStore';
    public const NonPickedUpByCustomer = 'NonPickedUpByCustomer';
    public const PickedUp = 'PickedUp';
    public const ShippedBySeller = 'ShippedBySeller';
}
