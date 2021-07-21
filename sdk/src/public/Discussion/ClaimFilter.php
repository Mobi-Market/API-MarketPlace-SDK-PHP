<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 03/11/2016
 * Time: 09:25
 */

namespace Sdk\Discussion;

class ClaimFilter extends DiscussionFilter
{
    /**
     * @var bool
     */
    private $_onlyMessageFromCDSCustomerService = false;

    /**
     * @param boolean $onlyMessageFromCDSCustomerService
     */
    public function setOnlyMessageFromCDSCustomerService($onlyMessageFromCDSCustomerService): void
    {
        $this->_onlyMessageFromCDSCustomerService = $onlyMessageFromCDSCustomerService;
    }

    /**
     * @return boolean
     */
    public function isOnlyMessageFromCDSCustomerService()
    {
        return $this->_onlyMessageFromCDSCustomerService;
    }

    /**
     * ClaimFilter constructor.
     */
    public function __construct()
    {
        $this->_statusList = [];
    }
}
