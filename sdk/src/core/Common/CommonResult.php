<?php

declare(strict_types=1);

/*
 * Created by Cdiscount
 * Date : 31/01/2017
 * Time : 10:58
 */

namespace Sdk\Common;

abstract class CommonResult
{
    /*
     * @var string
     */
    protected $_errorMessage;

    /**
     * @return string
     */
    public function getErrorMessage()
    {
        return $this->_errorMessage;
    }

    /*
     * @param $errorMessage
     */
    public function setErrorMessage($errorMessage): void
    {
        $this->_errorMessage = $errorMessage;
    }

    /**
     * @var bool
     */
    protected $_operationSuccess;

    /**
     * @return mixed
     */
    public function isOperationSuccess()
    {
        return $this->_operationSuccess;
    }

    /*
     * @param $operationSuccess
     */
    public function setOperationSuccess($operationSuccess): void
    {
        $this->_operationSuccess = $operationSuccess;
    }

    /**
     * @var array
     */
    protected $_errorList;

    /**
     * @return array
     */
    public function getErrorList()
    {
        return $this->_errorList;
    }

    /*
     * @param $errorMessage
     */
    public function addErrorToList($errorMessage): void
    {
        array_push($this->_errorList, $errorMessage);
    }
}
