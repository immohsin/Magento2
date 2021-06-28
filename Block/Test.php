<?php

namespace RetailAssistant\Js\Block;



class Test extends \Magento\Framework\View\Element\Template
{
    /**
     * @param \Magento\Framework\View\Element\Template\Context $context
     * @param array $data
     */
    protected $productRepository, $searhcriteria, $filterBuilder, $_storeManager;

    public function __construct(
        \Magento\Framework\View\Element\Template\Context $context,
        \Magento\Catalog\Model\productRepository $productRepository,
        \Magento\Framework\Api\Search\SearchCriteriaBuilder $searhcriteria,
        \Magento\Framework\Api\FilterBuilder $filterBuilder,
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        array $data = []
    ) {
        parent::__construct($context, $data);
        $this->productRepository = $productRepository;
        $this->searhcriteria = $searhcriteria;
        $this->filterBuilder = $filterBuilder;
        $this->_storeManager = $storeManager;
    }

    public function getProductInfo()
    {
        // $filter = $this->filterBuilder->setField('name')->setConditionType('like')->setValue($productName)->create();
        // $searchCrit = $this->searhcriteria->addFilter($filter)->create();
        // $searchresult = $this->productRepository->getList($searchCrit);
        // return count($searchresult->getItems());
        $rootPath = $this->_storeManager->getStore()->getBaseUrl();

        return $rootPath;
    }
}
