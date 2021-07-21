<?php

declare(strict_types=1);
/*
 * Created by EQUIPE-SQLI
 * Date: 15/05/2017
 */

namespace Sdk\Fulfilment;

class FulfilmentActivationReportDetails
{
    /*
     * @var string
     */
    private $_action = null;

    /*
     * @var boolean
     */
    private $_actionSuccess = null;

    /*
     * @var string
     */
    private $_description = null;

    /*
    * @var long
    */
    private $_height = null;

    /*
    * @var long
    */
    private $_length = null;

    /*
    * @var string
    */
    private $_productEAN = null;

    /*
    * @var string
    */
    private $_sKU = null;

    /*
    * @var string
    */
    private $_sellerProductReference = null;

    /*
     * @var long
     */
    private $_weight = null;

    /*
     * @var long
     */
    private $_width = null;


    /*
    * @return string
    */
    public function getAction()
    {
        return $this->_action;
    }


    /*
     * @param $action
     */
    public function setAction($action): void
    {
        $this->_action=$action;
    }

    /*
     * @return boolean
     */
    public function getActionSuccess()
    {
        return $this->_actionSuccess;
    }

    /*
    * @param $actionSuccess
    */
    public function setActionSuccess($actionSuccess): void
    {
        $this->_actionSuccess=$actionSuccess;
    }

    /*
     * @return string
     */
    public function getDescription()
    {
        return $this->_description;
    }

    /*
    * @param $description
    */
    public function setDescription($description): void
    {
        $this->_description=$description;
    }

    /*
    * @return long
    */
    public function getHeight()
    {
        return $this->_height;
    }

    /*
    * @param $height
    */
    public function setHeight($height): void
    {
        $this->_height=$height;
    }

    /*
    * @return long
    */
    public function getLength()
    {
        return $this->_length;
    }

    /*
    * @param $length
    */
    public function setLength($length): void
    {
        $this->_length=$length;
    }

    /*
     * @return string
     */
    public function getProductEAN()
    {
        return $this->_productEAN;
    }

    /*
    * @param $productEAN
    */
    public function setProductEAN($productEAN): void
    {
        $this->_productEAN=$productEAN;
    }

    /*
     * @return string
     */
    public function getSKU()
    {
        return $this->_sKU;
    }

    /*
    * @param $SKU
    */
    public function setSKU($SKU): void
    {
        $this->_sKU=$SKU;
    }

    /*
     * @return string
     */
    public function getSellerProductReference()
    {
        return $this->_sellerProductReference;
    }

    /*
    * @param $SKU
    */
    public function setSellerProductReference($sellerProductReference): void
    {
        $this->_sellerProductReference=$sellerProductReference;
    }

    /*
    * @return long
    */
    public function getWeight()
    {
        return $this->_weight;
    }

    /*
    * @param $weight
    */
    public function setWeight($weight): void
    {
        $this->_weight=$weight;
    }

    /*
    * @return long
    */
    public function getWidth()
    {
        return $this->_width;
    }

    /*
    * @param $width
    */
    public function setWidth($width): void
    {
        $this->_width=$width;
    }
}
