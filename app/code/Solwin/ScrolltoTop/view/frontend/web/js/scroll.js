/**
 * Solwin Infotech
 * Solwin ScrolltoTop Extension
 *
 * @category   Solwin
 * @package    Solwin_ScrolltoTop
 * @copyright  Copyright © 2006-2016 Solwin (https://www.solwininfotech.com)
 * @license    https://www.solwininfotech.com/magento-extension-license/ 
 */

require(['jquery'], function () {
    jQuery(document).ready(function () {
    if (jQuery(".scrollup").length > 0) {
        // scroll-to-top button show and hide
        jQuery(document).ready(function () {
            jQuery(window).scroll(function () {
                if (jQuery(this).scrollTop() > 100) {
                    jQuery('.scrollup').fadeIn();
                } else {
                    jQuery('.scrollup').fadeOut();
                }
            });
            // scroll-to-top animate
            jQuery('.scrollup').click(function () {
                jQuery("html, body").animate({scrollTop: 0}, 600);
                return false;
            });
        });
    }
});
});