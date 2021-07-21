<?php

declare(strict_types=1);
/**
 * Created by El Ibaoui Otmane (SQLI)
 * Date: 05/05/2017
 * Time: 16:08
 */

namespace Sdk\Fulfilment;

/**
 * Order Status Request
 */
class ExternalOrderLine
{
    /*
     * @var String
     */
    private $_productEan = null;

    /*
     * @return string
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
        $this->_productEan = $productEan;
    }

    /*
     * @var String
     */
    private $_productReference = null;

    /*
     * @return string
     */
    public function getProductReference()
    {
        return $this->_productReference;
    }

    /*
     * @param $productReference
     */
    public function setProductReference($productReference): void
    {
        $this->_productReference = $productReference;
    }

    /*
     * @var Int
     */
    private $_quantity = null;

    /*
     * @return Int
     */
    public function getQuantity()
    {
        return $this->_quantity;
    }

    /*
     * @param $quantity
     */
    public function setQuantity($quantity): void
    {
        $this->_quantity = $quantity;
    }

    /*
     * @var Long
     */
    private $_offerId = null;

    /*
     * @return Long
     */
    public function getOfferId()
    {
        return $this->_offerId;
    }

    /*
     * @param $offerId
     */
    public function setOfferId($offerId): void
    {
        $this->_offerId = $offerId;
    }

    /*
     * @var Byte
     */
    private $_productConditionId = null;

    /*
     * @return Byte
     */
    public function getProductConditionId()
    {
        return $this->_productConditionId;
    }

    /*
     * @param $productConditionId
     */
    public function setProductConditionId($productConditionId): void
    {
        $this->_productConditionId = $productConditionId;
    }

    /*
     * @var Byte
     */
    private $_productState = null;

    /*
     * @return Byte
     */
    public function getProductState()
    {
        return $this->_productState;
    }

    /*
     * @param $productState
     */
    public function setProductState($productState): void
    {
        $this->_productState = $productState;
    }

    /*
     * @var String
     */
    private $_productId = null;

    /*
     * @return String
     */
    public function getProductId()
    {
        return $this->_productId;
    }

    /*
     * @param $productId
     */
    public function setProductId($productId): void
    {
        $this->_productId = $productId;
    }

    /*
     * @var String
     */
    private $_variantId = null;

    /*
     * @return String
     */
    public function getVariantId()
    {
        return $this->_variantId;
    }

    /*
     * @param $variantId
     */
    public function setVariantId($variantId): void
    {
        $this->_variantId = $variantId;
    }
}
