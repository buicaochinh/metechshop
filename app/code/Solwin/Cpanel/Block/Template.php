<?php

namespace Solwin\Cpanel\Block;

class Template extends \Magento\Framework\View\Element\Template {

    public $_coreRegistry;

    public function __construct(
    \Magento\Backend\Block\Template\Context $context, \Magento\Framework\Registry $coreRegistry, array $data = []
    ) {
        $this->_coreRegistry = $coreRegistry;
        parent::__construct($context, $data);
    }

    public function getConfig($config_path, $storeCode = null) {
        return $this->_scopeConfig->getValue(
                        $config_path, \Magento\Store\Model\ScopeInterface::SCOPE_STORE, $storeCode
        );
    }

}

?>
