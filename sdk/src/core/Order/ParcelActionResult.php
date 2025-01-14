<?php

declare(strict_types=1);

/*
 * Created by Cdiscount
 * Date : 19/01/2017
 * Time : 15:46
 */

namespace Sdk\Order;

use Sdk\Common\CommonResult;

class ParcelActionResult extends CommonResult
{
    /*
     * @var string
     */
    private $_actionType = null;

    /*
     * @var bool
     */
    private $_isActionCreated = false;

    /*
     * @var string
     */
    private $_parcelNumber = null;

    /*
     * ParcelActionResult constructor, initialize array erorList the commonResult
     */
    public function __construct()
    {
        $this->_errorList = [];
    }

    /*
     * @param $parcelNumber
     */
    public function setParcelNumber($parcelNumber): void
    {
        $this->_parcelNumber = $parcelNumber;
    }

    /*
     * @return string
     */
    public function getParcelNumber()
    {
        return $this->_parcelNumber;
    }

    /*
     * return string
     */
    public function getActionType()
    {
        return $this->_actionType;
    }

    /*
     * @param $actionType
     */
    public function setActionType($actionType): void
    {
        $this->_actionType = $actionType;
    }

    /*
     * @return bool
     */
    public function isActionCreated()
    {
        return $this->_isActionCreated;
    }

    /*
     * @param $isActionCreated
     */
    public function setIsActionCreated($isActionCreated): void
    {
        $this->_isActionCreated = $isActionCreated;
    }
}
