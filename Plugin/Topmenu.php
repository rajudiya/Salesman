<?php

namespace Vendername\Salesman\Plugin;
    use Magento\Framework\Data\Tree\NodeFactory;
    use Magento\Framework\UrlInterface;

    class   Topmenu
    {
        protected $nodeFactory;
        protected $urlBuilder;

        public function __construct(NodeFactory $nodeFactory, UrlInterface $urlBuilder)
        {
            $this->nodeFactory = $nodeFactory;
            $this->urlBuilder = $urlBuilder;
        }

        public function beforeGetHtml(\Magento\Theme\Block\Html\Topmenu $subject, $outermostClass = '', $childrenWrapClass = '', $limit = 0)
        {
            $menuNode = $this->nodeFactory->create(['data' => $this->getNodeAsArray("New Manu", "mnuMain"),
                'idField' => 'id',
                'tree' => $subject->getMenu()->getTree(),]);
            $menuNode->addChild($this->nodeFactory->create(['data' => $this->getNodeAsArray("New Sub Manu", "mnuMyMenu"),
                'idField' => 'id',
                'tree' => $subject->getMenu()->getTree(),]));

            $subject->getMenu()->addChild($menuNode);

        }

        protected function getNodeAsArray($name, $id)
        {
            $url = $this->urlBuilder->getUrl("/" . $id); //here you can add url as per your choice of menu
            return ['name' => __($name),
                'id' => $id,
                'url' => $url,
                'has_active' => false,
                'is_active' => false,];
        }
    }