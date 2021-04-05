<?php

namespace ET\Theme\Block\Adminhtml\System\Config\Form;

use Magento\Store\Model\ScopeInterface;

class Info extends \Magento\Config\Block\System\Config\Form\Field {

    protected $moduleList;

    public function __construct(
        \Magento\Framework\Module\ModuleListInterface $moduleList, 
        \Magento\Backend\Block\Template\Context $context, array $data = []
    ) {
        parent::__construct($context, $data);
        $this->moduleList = $moduleList;
    }

    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element) {
        $m = $this->moduleList->getOne($this->getModuleName());

        $html = '<div style="padding:12px;background-color:#F1F1F1;border:1px solid #d1d1d1;margin-bottom:5px;font-weight: 600;">
            Etrend Lite: Magento 2 Theme <span style="color: #f66d1f;">v' . $m['setup_version'] . '</span> was developed by <a href="https://www.hiddentechies.com/" target="_blank">HiddenTechies</a>.
        </div>';
        
        return $html;
    }
}