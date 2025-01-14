<?php

declare(strict_types=1);
/*
 * Created by CDiscount
 * Date: 04/05/2017
 */

namespace Sdk\Fulfilment;

use Sdk\Common\CommonResult;

class FulfilmentSupplyOrderReportListResult extends CommonResult
{
    /*
     * @var int
     */
    private $_currentPageNumber = null;

    /*
     * @var int
     */
    private $_numberOfPages = null;

    /*
     * @var array
     */
    private $_reportList = [];

    /*
     * @return int
     */
    public function getCurrentPageNumber()
    {
        return $this->_currentPageNumber;
    }

    /*
     * @return int
     */
    public function getNumberOfPages()
    {
        return $this->_numberOfPages;
    }

    /*
    * @return array
    */
    public function getReportList()
    {
        return $this->_reportList;
    }

    /*
     * @param $currentPageNumber
     */
    public function setCurrentPageNumber($currentPageNumber): void
    {
        $this->_currentPageNumber = $currentPageNumber;
    }

    /*
     * @param $numberOfPages
     */
    public function setNumberOfPages($numberOfPages): void
    {
        $this->_numberOfPages = $numberOfPages;
    }


    /**
     * @param $supplyOrderReport \Sdk\Fulfilment\SupplyOrderReport
     */
    public function addReportList($supplyOrderReport): void
    {
        array_push($this->_reportList, $supplyOrderReport);
    }

    /*
     * FulfilmentSupplyOrderReportListResult constructor
     */
    public function __construct()
    {
        $this->_errorList = [];
    }
}
