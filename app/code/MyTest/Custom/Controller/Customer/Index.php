<?php 

namespace MyTest\Custom\Controller\Customer;

use Magento\Framework\View\Result\PageFactory;
use MyTest\Custom\Model\Customer as Customer;
use MyTest\Custom\Model\ResourceModel\Customer as ResourceModel;
use Magento\Framework\Controller\Result\RedirectFactory;
use Magento\Framework\App\Request\Http;
use Magento\Framework\App\ActionInterface;
use Magento\Framework\Message\Manager;

class Index implements ActionInterface
{
    protected $model;
    protected $resourceModel;
    protected $request;
    protected $redirectFactory;
    protected $messageManager;

    public function __construct(
        PageFactory $resultPageFactory,
        Customer $model,
        ResourceModel $resourceModel,
        Http $request,
        RedirectFactory $redirectFactory,
        Manager $messageManager  
    )
    {
        $this->resultPageFactory = $resultPageFactory;
        $this->model = $model;
        $this->resourceModel = $resourceModel;
        $this->request = $request;
        $this->redirectFactory = $redirectFactory;
        $this->messageManager = $messageManager;
    }

	public function execute(){
        $post = $this->request->getPost();

        if (!empty($post['message'])){
            $taskModel = $this->model->setData('message', $post['message']);

            if($this->resourceModel->save($taskModel)){
                $this->messageManager->addSuccessMessage( __('Form data has been submitted'));
            } else{
                $this->messageManager->addErrorMessage(__('Data was not saved.'));
            }
        } else {
            $this->messageManager->addErrorMessage(__('Enter data in the form'));
        }

        $redirect = $this->redirectFactory->create();
        $redirect->setUrl('/customer/account');
        
		return $redirect; 
	}
}