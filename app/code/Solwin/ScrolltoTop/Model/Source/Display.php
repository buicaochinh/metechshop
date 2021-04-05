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

class Display extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource
{
    public function getAllOptions()
    {
        if (!$this->_options) {
            $this->_options = [
                ['label' => 'Text Only', 'value' => 1],
                ['label' => 'Image Only', 'value' => 2],
                ['label' => 'Both Text and Image', 'value' => 3],
            ];
        }
        return $this->_options;
    }
}
