<?php

namespace ET\Theme\Setup;

use Magento\Framework\Setup;

class Installer implements Setup\SampleData\InstallerInterface {

    /**
     * @var \Magento\CmsSampleData\Model\Page
     */
    private $page;

    /**
     * @var \Magento\CmsSampleData\Model\Block
     */
    private $block;

    /**
     * @param \ET\Theme\Model\Page $page
     * @param \ET\Theme\Model\Block $block
     */
    public function __construct(
        \ET\Theme\Model\Page $page, 
        \ET\Theme\Model\Block $block
    ) {
        $this->page = $page;
        $this->block = $block;
    }

    /**
     * {@inheritdoc}
     */
    public function install() 
    {
        $this->page->install(
                [

                    'ET_Theme::DemoPages/pages.csv',
                ]
        );
        $this->block->install(
                [

                    'ET_Theme::DemoBlocks/blocks.csv',
                ]
        );
    }

}
