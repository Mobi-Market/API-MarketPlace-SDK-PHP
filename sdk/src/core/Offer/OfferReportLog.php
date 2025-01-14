<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 09/11/2016
 * Time: 10:05
 */

namespace Sdk\Offer;

use Sdk\Common\ReportLog;
use Sdk\Soap\Common\SoapTools;

class OfferReportLog extends ReportLog
{
    /**
     * @var string
     */
    private $_sellerProductId = null;

    /**
     * @return string
     */
    public function getSellerProductId()
    {
        return $this->_sellerProductId;
    }

    /**
     * @param string $sellerProductId
     */
    public function setSellerProductId($sellerProductId): void
    {
        if (!SoapTools::isSoapValueNull($sellerProductId)) {
            $this->_sellerProductId = $sellerProductId;
        }
    }

    /**
     * @param $offerReportPropertyLog \Sdk\Offer\OfferReportPropertyLog
     */
    public function addOfferReportPropertyLog($offerReportPropertyLog): void
    {
        if ($this->_propertyList == null) {
            $this->_propertyList = [];
        }
        array_push($this->_propertyList, $offerReportPropertyLog);
    }

    /**
     * @var string
     */
    private $_offerIntegrationStatus = null;

    /**
     * @return string
     */
    public function getOfferIntegrationStatus()
    {
        return $this->_offerIntegrationStatus;
    }

    /**
     * @param string $offerIntegrationStatus
     */
    public function setOfferIntegrationStatus($offerIntegrationStatus): void
    {
        $this->_offerIntegrationStatus = $offerIntegrationStatus;
    }

    /**
     * @var string
     */
    private $_productEan = null;

    /**
     * @return string
     */
    public function getProductEan()
    {
        return $this->_productEan;
    }

    /**
     * @param string $productEan
     */
    public function setProductEan($productEan): void
    {
        $this->_productEan = $productEan;
    }
}
