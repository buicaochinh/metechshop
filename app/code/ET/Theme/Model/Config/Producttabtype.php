<?php

namespace ET\Theme\Model\Config;

class Producttabtype implements \Magento\Framework\Option\ArrayInterface
{
    /**
     * {@inheritdoc}
     *
     * @codeCoverageIgnore
     */
    public function toOptionArray()
    {
        return [
            ['value' => 'cmsblock', 'label' => __('CMS Block')]
        ];
    }
}
