<?php

namespace Solwin\Cpanel\Model\Source;

class Layoutname extends \Magento\Eav\Model\Entity\Attribute\Source\AbstractSource {

    public function getAllOptions() {
        if (!$this->_options) {
            $this->_options = array(
                array('label' => 'Black', 'value' => 'black'),
                array('label' => 'White', 'value' => 'white'),
            );
        }
        return $this->_options;
    }

}
