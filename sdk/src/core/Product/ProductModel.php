<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 20/10/2016
 * Time: 16:18
 */

namespace Sdk\Product;

class ProductModel
{
    /**
     * @var string
     */
    private $_categoryCode = null;

    /**
     * @return string
     */
    public function getCategoryCode()
    {
        return $this->_categoryCode;
    }

    /**
     * @param string $categoryCode
     */
    public function setCategoryCode($categoryCode): void
    {
        $this->_categoryCode = $categoryCode;
    }

    /**
     * @var string
     */
    private $_name = null;

    /**
     * @return string
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param string $name
     */
    public function setName($name): void
    {
        $this->_name = $name;
    }

    /**
     * @var int
     */
    private $_modelId = 0;

    /**
     * @return int
     */
    public function getModelId()
    {
        return $this->_modelId;
    }

    /**
     * @var array
     */
    private $_keyValueProperties = [];

    /**
     * @param $keyvalueObj
     *
     */
    public function addKeyValueProperty($keyvalueObj): void
    {
        array_push($this->_keyValueProperties, $keyvalueObj);
    }

    /**
     * @return array
     */
    public function getValueProperties()
    {
        return $this->_keyValueProperties;
    }

    /**
     * @var array
     */
    private $_mandatoryModelProperties = [];

    /**
     * @param $mandatoryModelProperty
     *
     */
    public function addMandatoryModelProperty($mandatoryModelProperty): void
    {
        array_push($this->_mandatoryModelProperties, $mandatoryModelProperty);
    }

    /**
     * @return array
     */
    public function getMandatoryModelProperties()
    {
        return $this->_mandatoryModelProperties;
    }

    /**
     * @var string
     */
    private $_productXmlStructure = null;

    /**
     * @return string
     */
    public function getProductXmlStructure()
    {
        return $this->_productXmlStructure;
    }

    /**
     * @param string $productXmlStructure
     */
    public function setProductXmlStructure($productXmlStructure): void
    {
        $this->_productXmlStructure = $productXmlStructure;
    }

    /**
     * ProductModel constructor.
     * @param $modelD
     */
    public function __construct($modelD)
    {
        $this->_modelId = $modelD;
    }
}
