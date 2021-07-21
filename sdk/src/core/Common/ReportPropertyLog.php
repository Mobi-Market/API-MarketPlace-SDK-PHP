<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 09/11/2016
 * Time: 09:53
 */

namespace Sdk\Common;

use Sdk\Soap\Common\SoapTools;

class ReportPropertyLog
{
    /**
     * @var int
     */
    private $_errorCode = 0;

    /**
     * @return int
     */
    public function getErrorCode()
    {
        return $this->_errorCode;
    }

    /**
     * @var string
     */
    private $_logMessage = null;

    /**
     * @return string
     */
    public function getLogMessage()
    {
        return $this->_logMessage;
    }

    /**
     * @param string $logMessage
     */
    public function setLogMessage($logMessage): void
    {
        if (!SoapTools::isSoapValueNull($logMessage)) {
            $this->_logMessage = $logMessage;
        }
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
        if (!SoapTools::isSoapValueNull($name)) {
            $this->_name = $name;
        }
    }

    /**
     * @var string
     */
    private $_propertyError = null;

    /**
     * @return string
     */
    public function getPropertyError()
    {
        return $this->_propertyError;
    }

    /**
     * @param string $propertyError
     */
    public function setPropertyError($propertyError): void
    {
        if (!SoapTools::isSoapValueNull($propertyError)) {
            $this->_propertyError = $propertyError;
        }
    }

    /**
     * ReportPropertyLog constructor.
     * @param $errorCode
     */
    public function __construct($errorCode)
    {
        $this->_errorCode = $errorCode;
    }
}
