<?php

namespace ET\Theme\Helper;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Element\Template;

class Data extends \Magento\Framework\App\Helper\AbstractHelper {

    protected $_storeManager;
    protected $logoblock;
    protected $_registry;
    protected $_filterProvider;

    public function __construct(
        \Magento\Framework\App\Helper\Context $context, 
        \Magento\Theme\Block\Html\Header\Logo $logoblock, 
        \Magento\Store\Model\StoreManagerInterface $storeManager,
        \Magento\Cms\Model\Template\FilterProvider $filterProvider,
        \Magento\Framework\Registry $registry
    ) {
        $this->logoblock = $logoblock;
        $this->_storeManager = $storeManager;
        $this->_filterProvider = $filterProvider;
        $this->_registry = $registry;
        parent::__construct($context);
    }

    public function getCurrentProduct() 
    {
        return $this->_registry->registry('current_product');
    }
    
    public function getBaseUrl() 
    {
        return $this->_storeManager->getStore()->getBaseUrl();
    }

    public function getIsHomePage() 
    {
        return $this->logoblock->isHomePage();
    }

    public function getMediaUrl() {
        return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
    }
    
    public function getHomeUrl()
    {
        return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
    }

    public function getConfigValue($value = '') 
    {
        return $this->scopeConfig
                        ->getValue($value, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
    
    public function getCmsFilterContent($value='')
    {
        $html = $this->_filterProvider->getPageFilter()->filter($value);
        return $html;
    }
}
?>