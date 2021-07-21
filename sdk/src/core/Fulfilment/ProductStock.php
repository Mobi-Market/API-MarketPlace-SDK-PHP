<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 10/05/2017
 * Time: 09:52
 */

namespace Sdk\Fulfilment;

/**
 * Product Stock class
 */
class ProductStock
{
    /**
     * @var int
     */
    private $_blockedStock = null;

    /**
     * @return int
     */
    public function getBlockedStock()
    {
        return $this->_blockedStock;
    }

    /**
     * @param int $blockedStock
     */
    public function setBlockedStock($blockedStock): void
    {
        $this->_blockedStock = $blockedStock;
    }

    /**
     * @var string
     */
    private $_ean = null;

    /**
     * @return string
     */
    public function getEan()
    {
        return $this->_ean;
    }

    /**
     * @param int $ean
     */
    public function setEan($ean): void
    {
        $this->_ean = $ean;
    }

    /**
     * @var int
     */
    private $_fodStock = null;

    /**
     * @return int
     */
    public function getFodStock()
    {
        return $this->_fodStock;
    }

    /**
     * @param int $fodStock
     */
    public function setFodStock($fodStock): void
    {
        $this->_fodStock = $fodStock;
    }

    /**
     * @var int
     */
    private $_frontStock = null;

    /**
     * @return int
     */
    public function getFrontStock()
    {
        return $this->_frontStock;
    }

    /**
     * @param int $frontStock
     */
    public function setFrontStock($frontStock): void
    {
        $this->_frontStock = $frontStock;
    }

    /**
     * @var bool
     */
    private $_isReferenced = null;

    /**
     * @return bool
     */
    public function getIsReferenced()
    {
        return $this->_isReferenced;
    }

    /**
     * @param bool $isReferenced
     */
    public function setIsReferenced($isReferenced): void
    {
        $this->_isReferenced = $isReferenced;
    }

    /**
    * @var string
    */
    private $_libelle = null;

    /**
     * @return string
     */
    public function getLibelle()
    {
        return $this->_libelle;
    }

    /**
     * @param string $libelle
     */
    public function setLibelle($libelle): void
    {
        $this->_libelle = $libelle;
    }

    /**
    * @var string
    */
    private $_sellerReference = null;

    /**
     * @return string
     */
    public function getSellerReference()
    {
        return $this->_sellerReference;
    }

    /**
     * @param string $sellerReference
     */
    public function setSellerReference($sellerReference): void
    {
        $this->_sellerReference = $sellerReference;
    }

    /**
    * @var string
    */
    private $_sku = null;

    /**
     * @return string
     */
    public function getSku()
    {
        return $this->_sku;
    }

    /**
     * @param string $sku
     */
    public function setSku($sku): void
    {
        $this->_sku = $sku;
    }

    /**
    * @var int
    */
    private $_stockInWarehouse = null;

    /**
     * @return int
     */
    public function getStockInWarehouse()
    {
        return $this->_stockInWarehouse;
    }

    /**
     * @param int $stockInWarehouse
     */
    public function setStockInWarehouse($stockInWarehouse): void
    {
        $this->_stockInWarehouse = $stockInWarehouse;
    }

    /**
     * @var string
     */
    private $_warehouse = null;

    /**
     * @return string
     */
    public function getWarehouse()
    {
        return $this->_warehouse;
    }

    /**
     * @param string $warehouse
     */
    public function setWarehouse($warehouse): void
    {
        $this->_warehouse = $warehouse;
    }
}
