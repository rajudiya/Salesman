<?php
namespace Vendername\Salesman\Model\ResourceModel\View;

use \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection;

class Collection extends AbstractCollection
{
    /**
     * Remittance File Collection Constructor
     * @return void
     */
    protected function _construct()
    {
        $this->_init(\Vendername\Salesman\Model\View::class, \Vendername\Salesman\Model\ResourceModel\View::class);
    }
}