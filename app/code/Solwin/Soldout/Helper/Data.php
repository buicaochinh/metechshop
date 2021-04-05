<?php
/**
* Solwin Infotech
* Solwin Sold Out Label Extension
*
* @category   Solwin
* @package    Solwin_Soldout
* @copyright  Copyright © 2006-2016 Solwin (https://www.solwininfotech.com)
* @license    https://www.solwininfotech.com/magento-extension-license/ 
*/
?>
<?php

namespace Solwin\Soldout\Helper;

class Data extends \Magento\Framework\App\Helper\AbstractHelper 
{

    /**
     * @var \Magento\Store\Model\StoreManagerInterface
     */
    protected $_storeManager;
    
    public function __construct(
        \Magento\Framework\App\Helper\Context $context, 
        \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getMediaUrl() {
        return $this->_storeManager
                ->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
    }

    public function getConfigValue($value = '') {
        return $this->scopeConfig
                ->getValue($value, \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }
        
}
