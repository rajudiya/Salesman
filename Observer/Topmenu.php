<?php

namespace Vendername\Salesman\Observer;
    use Magento\Framework\Event\Observer as EventObserver;
    use Magento\Framework\Data\Tree\Node;
    use Magento\Framework\Event\ObserverInterface;

    class Topmenu implements ObserverInterface
    {
        public function __construct()
        {
        }

        public function execute(EventObserver $observer)
        {
            $menu = $observer->getMenu();
            $tree = $menu->getTree();
            $data = ['name' => __('MyMenu'),
                'id' => 'some-unique-id-here',
                'url' => 'url goes here',
                'is_active' => false];
            $node = new Node($data, 'id', $tree, $menu);
            $menu->addChild($node);
            return $this;
        }
    }