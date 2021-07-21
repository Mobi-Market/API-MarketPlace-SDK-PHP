<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 02/11/2016
 * Time: 17:08
 */

namespace Sdk\Offer;

class OfferFilter
{
    private $_pageNumber = 0;

    /**
     * @return int
     */
    public function getPageNumber()
    {
        return $this->_pageNumber;
    }

    /**
     * @param int $pageNumber
     */
    public function setPageNumber($pageNumber): void
    {
        $this->_pageNumber = $pageNumber;
    }
}
