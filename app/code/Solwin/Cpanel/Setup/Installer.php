<?php

/**
 * Copyright © 2015 Magento. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Solwin\Cpanel\Setup;

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
     * @param \Solwin\Cpanel\Model\Page $page
     * @param \Solwin\Cpanel\Model\Block $block
     */
    public function __construct(
    \Solwin\Cpanel\Model\Page $page, 
            \Solwin\Cpanel\Model\Block $block
    ) {
        $this->page = $page;
        $this->block = $block;
    }

    /**
     * {@inheritdoc}
     */
    public function install() {

        //$this->page->install(['Solwin_Cpanel::fixtures/pages/pages.csv']);
        $this->page->install(
                [

                    'Solwin_Cpanel::cmspages/cms_pages.csv',
                ]
        );
        $this->block->install(
                [

                    'Solwin_Cpanel::cmsblocks/cms_static_blocks.csv',
                ]
        );
    }

}
