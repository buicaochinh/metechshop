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

namespace Solwin\Soldout\Model\Label\Source;

class Position implements \Magento\Framework\Option\ArrayInterface
{
    const TOP_LEFT = 'ptop pleft';
    const TOP_CENTER = 'ptop pcenter';
    const TOP_RIGHT = 'ptop pright';
    const MIDDLE_LEFT = 'pmiddle pleft';
    const MIDDLE_CENTER = 'pmiddle pcenter';
    const MIDDLE_RIGHT = 'pmiddle pright';
    const BOTTOM_LEFT = 'pbottom pleft';
    const BOTTOM_CENTER = 'pbottom pcenter';
    const BOTTOM_RIGHT = 'pbottom pright';
    const _EMPTY = '';


    /**
     * to option array
     *
     * @return array
     */
    public function toOptionArray()
    {
        $options = [
            [
                'value' => self::TOP_LEFT,
                'label' => __('Top Left')
            ],
            [
                'value' => self::TOP_CENTER,
                'label' => __('Top Center')
            ],
            [
                'value' => self::TOP_RIGHT,
                'label' => __('Top Right')
            ],
            [
                'value' => self::MIDDLE_LEFT,
                'label' => __('Middle Left')
            ],
            [
                'value' => self::MIDDLE_CENTER,
                'label' => __('Middle Center')
            ],
            [
                'value' => self::MIDDLE_RIGHT,
                'label' => __('Middle Right')
            ],
            [
                'value' => self::BOTTOM_LEFT,
                'label' => __('Bottom Left')
            ],
            [
                'value' => self::BOTTOM_CENTER,
                'label' => __('Bottom Center')
            ],
            [
                'value' => self::BOTTOM_RIGHT,
                'label' => __('Bottom Right')
            ],
            [
                'value' => self::_EMPTY,
                'label' => __('')
            ],
        ];
        return $options;

    }
}

