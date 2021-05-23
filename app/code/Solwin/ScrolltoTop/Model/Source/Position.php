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

namespace Solwin\ScrolltoTop\Model\Source;

class Position extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{

    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => 'Right', 'value' => 1],
                ['label' => 'Left', 'value' => 2]
            ];
        }
        return $this->_options;
    }
}
