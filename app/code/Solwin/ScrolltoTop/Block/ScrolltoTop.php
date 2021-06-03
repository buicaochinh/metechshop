<?php
/**
 * Solwin Infotech
 * Solwin ScrolltoTop Extension
 *
 * @category   Solwin
 * @package    Solwin_ScrolltoTop
 * @copyright  Copyright © 2006-2016 Solwin (https://www.solwininfotech.com)
 * @license    https://www.solwininfotech.com/magento-extension-license/
 */
?>
<?php

namespace Solwin\ScrolltoTop\Block;

use Magento\Framework\View\Element\Template;

class ScrolltoTop extends Template
{
    
    /**
     * Get base url without store code
     */
    public function getBaseUrl()
    {
        return $this->_storeManager
                ->getStore()
                ->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_WEB);
    }
    
    /**
     * Return  config value by key and store
     *
     * @param string $key
     * @param \Magento\Store\Model\Store|int|string $store
     * @return string|null
     */
    public function getConfig($key)
    {
        $result = $this->_scopeConfig->getValue(
            $key,
            \Magento\Store\Model\ScopeInterface::SCOPE_STORE
        );
        return $result;
    }
}
