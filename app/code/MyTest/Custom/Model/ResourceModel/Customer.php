<?php

namespace MyTest\Custom\Model\ResourceModel;

use Magento\Framework\Model\ResourceModel\Db\AbstractDb;
 

class Customer extends AbstractDb
{
	public function _construct()
	{
		$this->_init('customer_message', 'message_id');
	}
}