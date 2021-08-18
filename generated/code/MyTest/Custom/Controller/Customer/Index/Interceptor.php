<?php
namespace MyTest\Custom\Controller\Customer\Index;

/**
 * Interceptor class for @see \MyTest\Custom\Controller\Customer\Index
 */
class Interceptor extends \MyTest\Custom\Controller\Customer\Index implements \Magento\Framework\Interception\InterceptorInterface
{
    use \Magento\Framework\Interception\Interceptor;

    public function __construct(\Magento\Framework\View\Result\PageFactory $resultPageFactory, \MyTest\Custom\Model\Customer $model, \MyTest\Custom\Model\ResourceModel\Customer $resourceModel, \Magento\Framework\App\Request\Http $request, \Magento\Framework\Controller\Result\RedirectFactory $redirectFactory, \Magento\Framework\Message\Manager $messageManager)
    {
        $this->___init();
        parent::__construct($resultPageFactory, $model, $resourceModel, $request, $redirectFactory, $messageManager);
    }

    /**
     * {@inheritdoc}
     */
    public function execute()
    {
        $pluginInfo = $this->pluginList->getNext($this->subjectType, 'execute');
        return $pluginInfo ? $this->___callPlugins('execute', func_get_args(), $pluginInfo) : parent::execute();
    }
}
