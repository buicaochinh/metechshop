<?php

/**
 * Solwin Infotech
 * Solwin Advanced ScrolltoTop Popup Extension
 *
 * @category   Solwin
 * @package    Solwin_ScrolltoTop
 * @copyright  Copyright © 2006-2016 Solwin (https://www.solwininfotech.com)
 * @license    https://www.solwininfotech.com/magento-extension-license/
 */
namespace Solwin\ScrolltoTop\Model;

class Color extends \Magento\Config\Block\System\Config\Form\Field
{
    protected function _getElementHtml(
        \Magento\Framework\Data\Form\Element\AbstractElement $element
    ) {
        $time = $element->getHtmlId();
        $html = parent::_getElementHtml($element);
        
        $html .= $element->getAfterElementHtml();
        
        $html .= '<style>#'.$time.' + .minicolors-swatch {left: auto; right: 0;'
                . 'top: 0; width:27px; height:27px;} #'.$time
                . '{height: auto; width:174px; padding-left: 2px;}'
                . '</style>';
        
        $html .= '<script>';
        $html .= 'jQuery(document).ready(function(){';
        $html .= 'jQuery("#'.$time.'").minicolors();';
        $html .= '});';
        $html .= '</script>';

        return $html;
    }
}
