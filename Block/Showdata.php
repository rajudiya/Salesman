<?php

namespace Vendername\Salesman\Block;

use Magento\Framework\View\Element\Template;
use Magento\Backend\Block\Template\Context;
use Vendername\Salesman\Model\ResourceModel\SalesmanModel\CollectionFactory;

class Showdata extends Template
{

    public $collection;

    public function __construct(Context $context, CollectionFactory $collectionFactory, array $data = [])
    {
        $this->collection = $collectionFactory;
        parent::__construct($context, $data);
    }

    public function getCollection()
    {
        return $this->collection->create();
    }

}