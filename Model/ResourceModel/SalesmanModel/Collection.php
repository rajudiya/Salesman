<?php

namespace Vendername\Salesman\Model\ResourceModel\SalesmanModel;

class Collection extends \Magento\Framework\Model\ResourceModel\Db\Collection\AbstractCollection
{
    /**
     * @var string
     */
    protected $_idFieldName = 'id';

    /**
     * Define resource model
     * @return void
     */
    protected function _construct()
    {
        $this->_init(
            'Vendername\Salesman\Model\SalesmanModel',
            'Vendername\Salesman\Model\ResourceModel\SalesmanModel'
        );
    }
}
