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

namespace Solwin\Soldout\Model\Config\Source;

class StockOption implements \Magento\Framework\Option\ArrayInterface 
{
    /**
     * @return array
     */
    public function toOptionArray() {
        return [
            ['value' => 'label', 'label' => __('Label')],
            ['value' => 'image', 'label' => __('Image')]
        ];
    }

}
?>

