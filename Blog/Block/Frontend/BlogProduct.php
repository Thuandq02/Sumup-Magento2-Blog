<?php

namespace SmartOSC\Blog\Block\Frontend;

use Magento\Catalog\Model\ProductFactory;

class BlogProduct extends \Magento\Framework\View\Element\Template
{

    protected $productFactory;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        ProductFactory $productFactory,
        array $data = []
    )
    {
        $this->productFactory = $productFactory;
        parent::__construct($context, $data);
    }

    public function getBlogProduct()
    {
        $id = $this->getRequest()->getParam('id');
        $blog = $this->productFactory->create()->load($id)->getData();
        return $blog;
    }
}
