<?php

namespace MyTest\Custom\Block;

class FormLeft extends \Magento\Framework\View\Element\Template
{
    public function getFormAction()
    {
        return '/custom/customer/index';
    }
}