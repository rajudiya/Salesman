<?php

namespace Vendername\Salesman\Controller\Adminhtml\Salesman;

class Index extends \Magento\Backend\App\Action
{
    /**
     * @var \Magento\Framework\View\Result\PageFactory
     */
    protected $_resultPageFactory;

    protected $_Salesman;

    /**
     * @param \Magento\Backend\App\Action\Context        $context
     * @param \Magento\Framework\View\Result\PageFactory $resultPageFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Magento\Framework\View\Result\PageFactory $resultPageFactory,
        \Vendername\Salesman\Model\SalesmanModelFactory $Salesman
    ) 
    {
        parent::__construct($context);
        $this->_resultPageFactory = $resultPageFactory;
        $this->_Salesman = $Salesman; 
    }

    /**
     * Product List page.
     *
     * @return \Magento\Backend\Model\View\Result\Page
     */
    public function execute()
    {
        /** @var \Magento\Backend\Model\View\Result\Page $resultPage */
        $resultPage = $this->_resultPageFactory->create();
        $resultPage->setActiveMenu('Vendername_Salesman::Vendernamesalesman');
        $resultPage->getConfig()->getTitle()->set(__('All Salesman'));
        $result = $this->_Salesman->create()->getCollection();
        return $resultPage;
    }
        protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Vendername_Salesman::salesman_list');
    }
}
