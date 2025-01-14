<?php

declare(strict_types=1);
/*
 * Created by CDiscount
 * Date: 04/05/2017
 */

namespace Sdk\Fulfilment;

class SupplyOrderReportLine
{
    /*
     * @array
     */
    private $_errorList = [];

    /*
     * @return array
     */
    public function getErrorList()
    {
        return $this->_errorList;
    }

    /**
     * @param $error \Sdk\Fulfilment\Error
     */
    public function addToErrorList($error): void
    {
        array_push($this->_errorList, $error);
    }

    /*
     * @return array
     */
    public function getReportList()
    {
        return $this->_reportList;
    }

    /*
     * @var int
     */
    private $_orderedQuantity = null;

    /*
     * @var string
     */
    private $_productEan = null;

    /*
     * @var long
     */
    private $_sellerId = null;

    /*
     * @var string
     */
    private $_sellerProductReference = null;

    /*
     * @var string
     */
    private $_sellerSupplyOrderNumber = null;

    /*
     * @var string
     */
    private $_supplyOrderNumber = null;

    /*
     * @var warehouseType
     */
    private $_warehouse = null;

    /*
     * @var dateTime
     */
    private $_warehouseReceptionMinDate = null;

    /*
    * @return array
    */
    public function getOrderedQuantity()
    {
        return $this->_orderedQuantity;
    }

    /*
     * @param $orderedQuantity
     */
    public function setOrderedQuantity($orderedQuantity): void
    {
        $this->_orderedQuantity=$orderedQuantity;
    }

    /*
    * @return array
    */
    public function getProductEan()
    {
        return $this->_productEan;
    }

    /*
     * @param $productEan
     */
    public function setProductEan($productEan): void
    {
        $this->_productEan=$productEan;
    }

    /*
    * @return array
    */
    public function getSellerId()
    {
        return $this->_sellerId;
    }

    /*
     * @param $sellerId
     */
    public function setSellerId($sellerId): void
    {
        $this->_sellerId=$sellerId;
    }

    /*
    * @return string
    */
    public function getSellerProductReference()
    {
        return $this->_sellerProductReference;
    }

    /*
     *  @param $sellerProductReference
     */
    public function setSellerProductReference($sellerProductReference): void
    {
        $this->_sellerProductReference=$sellerProductReference;
    }

    /*
    * @return string
    */
    public function getSellerSupplyOrderNumber()
    {
        return $this->_sellerSupplyOrderNumber;
    }

    /*
     * @param $sellerSupplyOrderNumber
     */
    public function setSellerSupplyOrderNumber($sellerSupplyOrderNumber): void
    {
        $this->_sellerSupplyOrderNumber=$sellerSupplyOrderNumber;
    }

    /*
    * @return string
    */
    public function getSupplyOrderNumber()
    {
        return $this->_supplyOrderNumber;
    }

    /*
     * @param $supplyOrderNumber
     */
    public function setSupplyOrderNumber($supplyOrderNumber): void
    {
        $this->_supplyOrderNumber=$supplyOrderNumber;
    }

    /*
    * @return string
    */
    public function getWarehouse()
    {
        return $this->_warehouse;
    }

    /*
     * @param $warehouseTypes Sdk\Fulfilment\WarehouseTypes
     */
    public function setWarehouse($warehouseTypes): void
    {
        $this->_warehouse = $warehouseTypes;
    }

    /*
    * @return array
    */
    public function getWarehouseReceptionMinDate()
    {
        return $this->_warehouseReceptionMinDate;
    }

    /*
     * @param $warehouseReceptionMinDate
     */
    public function setWarehouseReceptionMinDate($warehouseReceptionMinDate): void
    {
        $this->_warehouseReceptionMinDate=$warehouseReceptionMinDate;
    }
}
