<?php

declare(strict_types=1);
/**
 * Created by CDiscount
 * Created by CDiscount
 * Date: 03/11/2016
 * Time: 16:38
 */

namespace Sdk\Soap\Discussion;

use Sdk\Soap\BaliseTool;

class GetOrderQuestionList extends BaliseTool
{
    public function __construct($xmlns = 'xmlns="http://www.cdiscount.com"')
    {
        $this->_xmlns = $xmlns;
        $this->_tag = 'GetOrderQuestionList';
        parent::__construct();
    }
}
