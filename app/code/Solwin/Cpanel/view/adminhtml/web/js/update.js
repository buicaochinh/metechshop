/**
 * Solwin Infotech
 * Solwin FreeGo Theme
 *
 * @category   Solwin
 * @package    Solwin FreeGo Theme
 * @copyright  Copyright © 2006-2016 Solwin (https://www.solwininfotech.com)
 * @license    https://www.solwininfotech.com/magento-extension-license/ 
 */

require(['jquery'], function () {
    jQuery(document).ready(function () {
        jQuery(".admin__menu #menu-solwin-cpanel-view .submenu .item-addimage, .admin__menu #menu-solwin-cpanel-view .submenu .item-addimage-two").find('a').remove();
        
        var eImage = jQuery(".admin__menu #menu-solwin-cpanel-view .submenu .item-addimage").parent().html();
        var obj = '<a href="https://www.solwininfotech.com/product/magento-2-extensions/" target="_blank">';
        obj += eImage;
        obj += '</a>';
    	jQuery(".admin__menu #menu-solwin-cpanel-view .submenu .item-addimage").replaceWith(obj);

    	var eImageTwo = jQuery(".admin__menu #menu-solwin-cpanel-view .submenu .item-addimage-two").parent().html();
        var obj = '<a href="https://www.solwininfotech.com/my-account/" target="_blank">';
        obj += eImageTwo;
        obj += '</a>';
    	jQuery(".admin__menu #menu-solwin-cpanel-view .submenu .item-addimage-two").replaceWith(obj);
	});
});