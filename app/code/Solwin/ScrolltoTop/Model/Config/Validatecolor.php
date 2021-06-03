<?php

namespace Solwin\ScrolltoTop\Model\Config;

class Validatecolor extends \Magento\Framework\App\Config\Value
{

    public function beforeSave()
    {
        $v = $this->getValue();
        if ($v == 'rgba(0, 0, 0, 0)') {
            $this->setValue('transparent');
        }
        return $this;
    }
}
