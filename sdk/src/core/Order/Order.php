<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 13/10/2016
 * Time: 16:52
 */

namespace Sdk\Order;

class Order
{
    /**
     * Order constructor.
     * @param $orderNumber string
     */
    public function __construct($orderNumber)
    {
        $this->_orderNumber = $orderNumber;
    }

    /**
     * @var string
     */
    private $_orderNumber = null;

    /**
     * @return string
     */
    public function getOrderNumber()
    {
        return $this->_orderNumber;
    }

    /**
     * @var \Sdk\Seller\Address
     */
    private $_billingAddress = null;

    /**
     * @return \Sdk\Seller\Address
     */
    public function getBillingAddress()
    {
        return $this->_billingAddress;
    }

    /**
     * @param \Sdk\Seller\Address $billingAddress
     */
    public function setBillingAddress($billingAddress): void
    {
        $this->_billingAddress = $billingAddress;
    }

    /**
     * @var \Sdk\Seller\Address
     */
    private $_shippingAddress = null;

    /**
     * @return \Sdk\Seller\Address
     */
    public function getShippingAddress()
    {
        return $this->_shippingAddress;
    }

    /**
     * @param \Sdk\Seller\Address $shippingAddress
     */
    public function setShippingAddress($shippingAddress): void
    {
        $this->_shippingAddress = $shippingAddress;
    }

    /**
     * @var \Sdk\Order\Corporation
     */
    private $_corporation = null;

    /**
     * @return Corporation
     */
    public function getCorporation()
    {
        return $this->_corporation;
    }

    /**
     * @param Corporation $corporation
     */
    public function setCorporation($corporation): void
    {
        $this->_corporation = $corporation;
    }

    /**
     * @var string
     */
    //TODO convert to Date Object
    private $_creationDate = null;

    /**
     * @return string
     */
    public function getCreationDate()
    {
        return $this->_creationDate;
    }

    /**
     * @param string $creationDate
     */
    public function setCreationDate($creationDate): void
    {
        $this->_creationDate = $creationDate;
    }

    /**
     * @var \Sdk\Customer\Customer
     */
    private $_customer = null;

    /**
     * @return \Sdk\Customer\Customer
     */
    public function getCustomer()
    {
        return $this->_customer;
    }

    /**
     * @param \Sdk\Customer\Customer $customer
     */
    public function setCustomer($customer): void
    {
        $this->_customer = $customer;
    }

    /**
     * @var bool
     */
    private $_hasClaims = false;

    /**
     * @return boolean
     */
    public function isHasClaims()
    {
        return $this->_hasClaims;
    }

    /**
     * @param boolean $hasClaims
     */
    public function setHasClaims($hasClaims): void
    {
        $this->_hasClaims = $hasClaims;
    }

    /**
     * @var float
     */
    private $_initialTotalAmount = 0.0;

    /**
     * @return float
     */
    public function getInitialTotalAmount()
    {
        return $this->_initialTotalAmount;
    }

    /**
     * @param float $initialTotalAmount
     */
    public function setInitialTotalAmount($initialTotalAmount): void
    {
        $this->_initialTotalAmount = $initialTotalAmount;
    }

    /**
     * @var float
     */
    private $_initialTotalShippingChargesAmount = 0.0;

    /**
     * @return float
     */
    public function getInitialTotalShippingChargesAmount()
    {
        return $this->_initialTotalShippingChargesAmount;
    }

    /**
     * @param float $initialTotalShippingChargesAmount
     */
    public function setInitialTotalShippingChargesAmount($initialTotalShippingChargesAmount): void
    {
        $this->_initialTotalShippingChargesAmount = $initialTotalShippingChargesAmount;
    }

    /**
     * @var bool
     */
    private $_isCLogistiqueOrder = false;

    /**
     * @return boolean
     */
    public function isIsCLogistiqueOrder()
    {
        return $this->_isCLogistiqueOrder;
    }

    /**
     * @param boolean $isCLogistiqueOrder
     */
    public function setIsCLogistiqueOrder($isCLogistiqueOrder): void
    {
        $this->_isCLogistiqueOrder = $isCLogistiqueOrder;
    }

    /**
     * @var string
     */
    //TODO passer en vraie date
    private $_lastUpdatedDate = null;

    /**
     * @return string
     */
    public function getLastUpdatedDate()
    {
        return $this->_lastUpdatedDate;
    }

    /**
     * @param string $lastUpdatedDate
     */
    public function setLastUpdatedDate($lastUpdatedDate): void
    {
        $this->_lastUpdatedDate = $lastUpdatedDate;
    }

    /**
     * @var string
     */
    //TODO passer en vraie date
    private $_modifiedDate = null;

    /**
     * @return string
     */
    public function getModifiedDate()
    {
        return $this->_modifiedDate;
    }

    /**
     * @param string $modifiedDate
     */
    public function setModifiedDate($modifiedDate): void
    {
        $this->_modifiedDate = $modifiedDate;
    }

    /**
     * @var \Sdk\Order\OrderLineList
     */
    private $_orderLineList = null;

    /**
     * @return OrderLineList
     */
    public function getOrderLineList()
    {
        return $this->_orderLineList;
    }

    /**
     * @param OrderLineList $orderLineList
     */
    public function setOrderLineList($orderLineList): void
    {
        $this->_orderLineList = $orderLineList;
    }

    /**
     * @var string
     */
    private $_shippingCode = null;

    /**
     * @return string
     */
    public function getShippingCode()
    {
        return $this->_shippingCode;
    }

    /**
     * @param string $shippingCode
     */
    public function setShippingCode($shippingCode): void
    {
        $this->_shippingCode = $shippingCode;
    }

    #region SiteCommission

    /**
     * @var float
     */
    private $_siteCommissionPromisedAmount = 0.0;

    /**
     * @return float
     */
    public function getSiteCommissionPromisedAmount()
    {
        return $this->_siteCommissionPromisedAmount;
    }

    /**
     * @param float $siteCommissionPromisedAmount
     */
    public function setSiteCommissionPromisedAmount($siteCommissionPromisedAmount): void
    {
        $this->_siteCommissionPromisedAmount = $siteCommissionPromisedAmount;
    }

    /**
     * @var float
     */
    private $_siteCommissionShippedAmount = 0.0;

    /**
     * @return float
     */
    public function getSiteCommissionShippedAmount()
    {
        return $this->_siteCommissionShippedAmount;
    }

    /**
     * @param float $siteCommissionShippedAmount
     */
    public function setSiteCommissionShippedAmount($siteCommissionShippedAmount): void
    {
        $this->_siteCommissionShippedAmount = $siteCommissionShippedAmount;
    }

    /**
     * @var float
     */
    private $_siteCommissionValidatedAmount = 0.0;

    /**
     * @return float
     */
    public function getSiteCommissionValidatedAmount()
    {
        return $this->_siteCommissionValidatedAmount;
    }

    /**
     * @param float $siteCommissionValidatedAmount
     */
    public function setSiteCommissionValidatedAmount($siteCommissionValidatedAmount): void
    {
        $this->_siteCommissionValidatedAmount = $siteCommissionValidatedAmount;
    }

    #endregion

    #region Status

    /**
     * @var \Sdk\Order\OrderStatusEnum
     */
    private $_status = OrderStatusEnum::None;

    /**
     * @return OrderStatusEnum
     */
    public function getStatus()
    {
        return $this->_status;
    }

    /**
     * @param OrderStatusEnum $status
     */
    public function setStatus($status): void
    {
        $this->_status = $status;
    }

    /**
     * @var \Sdk\Order\OrderStateEnum
     */
    private $_orderState = null;

    /**
     * @return string OrderStateEnum
     */
    public function getOrderState()
    {
        return $this->_orderState;
    }

    /**
     * @param string $orderState
     */
    public function setOrderState($orderState): void
    {
        $this->_orderState = $orderState;
    }

    /**
     * @var \Sdk\Order\ValidationStatusEnum
     */
    private $_validationStatus = ValidationStatusEnum::None;

    /**
     * @return ValidationStatusEnum
     */
    public function getValidationStatus()
    {
        return $this->_validationStatus;
    }

    /**
     * @param ValidationStatusEnum $validationStatus
     */
    public function setValidationStatus($validationStatus): void
    {
        $this->_validationStatus = $validationStatus;
    }

    #endregion Status

    #region Amount and Shipping Charges

    /**
     * @var float
     */
    private $_shippedTotalAmount = 0.0;

    /**
     * @return float
     */
    public function getShippedTotalAmount()
    {
        return $this->_shippedTotalAmount;
    }

    /**
     * @param float $shippedTotalAmount
     */
    public function setShippedTotalAmount($shippedTotalAmount): void
    {
        $this->_shippedTotalAmount = $shippedTotalAmount;
    }

    /**
     * @var float
     */
    private $_shippedTotalShippingCharges = 0.0;

    /**
     * @return float
     */
    public function getShippedTotalShippingCharges()
    {
        return $this->_shippedTotalShippingCharges;
    }

    /**
     * @param float $shippedTotalShippingCharges
     */
    public function setShippedTotalShippingCharges($shippedTotalShippingCharges): void
    {
        $this->_shippedTotalShippingCharges = $shippedTotalShippingCharges;
    }

    /**
     * @var float
     */
    private $_validatedTotalAmount = 0.0;

    /**
     * @return float
     */
    public function getValidatedTotalAmount()
    {
        return $this->_validatedTotalAmount;
    }

    /**
     * @param float $validatedTotalAmount
     */
    public function setValidatedTotalAmount($validatedTotalAmount): void
    {
        $this->_validatedTotalAmount = $validatedTotalAmount;
    }

    /**
     * @var float
     */
    private $_validatedTotalShippingCharges = 0.0;

    /**
     * @return float
     */
    public function getValidatedTotalShippingCharges()
    {
        return $this->_validatedTotalShippingCharges;
    }

    /**
     * @param float $validatedTotalShippingCharges
     */
    public function setValidatedTotalShippingCharges($validatedTotalShippingCharges): void
    {
        $this->_validatedTotalShippingCharges = $validatedTotalShippingCharges;
    }

    #endregion Amount and Shipping Charges

    /**
     * @var int
     */
    private $_visaCegid = 0;

    /**
     * @return int
     */
    public function getVisaCegid()
    {
        return $this->_visaCegid;
    }

    /**
     * @param int $visaCegid
     */
    public function setVisaCegid($visaCegid): void
    {
        $this->_visaCegid = $visaCegid;
    }

    #region ParcelList

    /**
     * @var bool
     */
    private $_archiveParcelList = false;

    /**
     * @return boolean
     */
    public function isArchiveParcelList()
    {
        return $this->_archiveParcelList;
    }

    /**
     * @param boolean $archiveParcelList
     */
    public function setArchiveParcelList($archiveParcelList): void
    {
        $this->_archiveParcelList = $archiveParcelList;
    }

    /**
     * @var \Sdk\Parcel\ParcelList
     */
    private $_parcelList = null;

    /**
     * @param $parcelList
     */
    public function setParcelList($parcelList): void
    {
        $this->_parcelList = $parcelList;
    }

    /**
     * @return \Sdk\Parcel\ParcelList
     */
    public function getParcelList()
    {
        return $this->_parcelList;
    }

    #endregion ParcelList

    /**
     * @var string
     */
    private $_modGesLog = null;

    /**
     * @return string
     */
    public function getModGesLog()
    {
        return $this->_modGesLog;
    }

    /**
     * @param $modGesLog
     */
    public function setModGesLog($modGesLog): void
    {
        $this->_modGesLog = $modGesLog;
    }

    /**
     * @var string PartnerOrderRef
     */
    private $_partnerOrderRef = "";

    /**
     * @return string
     */
    public function getPartnerOrderRef()
    {
        return $this->_partnerOrderRef;
    }

    /**
     * @param string $partnerOrderRef
     */
    public function setPartnerOrderRef($partnerOrderRef): void
    {
        $this->_partnerOrderRef = $partnerOrderRef;
    }

    /*
     * @var array
     */
    private $_voucherList = null;

    /*
     * @return array
     */
    public function getVoucherList()
    {
        return $this->_voucherList;
    }

    /*
     * @param $voucherList \Sdk\Order\VoucherList
     */
    public function setVoucherList($voucherList): void
    {
        $this->_voucherList = $voucherList;
    }
}
