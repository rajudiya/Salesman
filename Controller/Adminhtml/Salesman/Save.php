<?php
namespace Vendername\Salesman\Controller\Adminhtml\Salesman;

class Save extends \Magento\Backend\App\Action
{
    /**
     * @var \Vendername\Salesman\Model\SalesmanFactory
     */
    var $SalesmanFactory;

    /**
     * @param \Magento\Backend\App\Action\Context $context
     * @param \Vendername\Salesman\Model\SalesmanFactory $SalesmanFactory
     */
    public function __construct(
        \Magento\Backend\App\Action\Context $context,
        \Vendername\Salesman\Model\SalesmanModelFactory $SalesmanFactory
    ) {
        parent::__construct($context);
        $this->SalesmanFactory = $SalesmanFactory;
    }

    /**
     * @SuppressWarnings(PHPMD.CyclomaticComplexity)
     * @SuppressWarnings(PHPMD.NPathComplexity)
     */
    public function execute()
    {
        $data = $this->getRequest()->getPostValue();
        array_shift($data);
        if (!$data) {
            $this->_redirect('*/*/addrow');
            return;
        }
        try {
            $rowData = $this->SalesmanFactory->create();
            $rowData->setData($data);
            if (isset($data['id'])) {
                $rowData->setEntityId($data['id']);
            }
            $rowData->save();
            $this->messageManager->addSuccess(__('Salesman has been successfully saved.'));
        } catch (\Exception $e) {
            $this->messageManager->addError(__($e->getMessage()));
        }
        $this->_redirect('*/*/index');
    }

    /**
     * @return bool
     */
    protected function _isAllowed()
    {
        return $this->_authorization->isAllowed('Vendername_Salesman::save');
    }
}