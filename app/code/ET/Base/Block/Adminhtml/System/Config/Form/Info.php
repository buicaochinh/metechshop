<?php

namespace ET\Base\Block\Adminhtml\System\Config\Form;

class Info extends \Magento\Config\Block\System\Config\Form\Field {

    protected $moduleList;

    public function __construct(
    \Magento\Framework\Module\ModuleListInterface $moduleList, \Magento\Backend\Block\Template\Context $context, array $data = []
    ) {
        $this->moduleList = $moduleList;
        parent::__construct($context, $data);
    }

    public function render(\Magento\Framework\Data\Form\Element\AbstractElement $element) {
        $html = '';
        if (in_array('curl', get_loaded_extensions())) {

            $file = 'https://www.hiddentechies.com/documentation/notifications/latest_notifications_etrend.xml';
            define('LATEST_NOTIFICATIONS_FILE', $file);

            $ch = curl_init();
            $timeout = 5;
            curl_setopt($ch, CURLOPT_URL, LATEST_NOTIFICATIONS_FILE);
            curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
            curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
            curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);

            $response = curl_exec($ch);
            $errmsg = curl_error($ch);
            curl_close($ch);

            if ($errmsg == '') {
                $xml = simplexml_load_string($response);
                $content_info = $xml->item->content_info;

                $html .= '<div class="display-ht-notifications" style="float: left;clear: both;">';
                $html .= $content_info;
                $html .= '</div>';
            }
        }

        return $html;
    }

}
