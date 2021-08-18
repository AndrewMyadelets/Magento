<?php

namespace MyTest\Custom\Model;

use Magento\Framework\Model\AbstractModel;


class Customer extends AbstractModel
{
	protected function _construct()
	{
		$this->_init('MyTest\Custom\Model\ResourceModel\Customer');
	}

}