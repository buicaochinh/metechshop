<?php

namespace Solwin\Cpanel\Helper;

use Magento\Framework\App\Action\Context;
use Magento\Framework\View\Element\Template;

class Data extends \Magento\Framework\App\Helper\AbstractHelper {

    protected $_storeManager;
    protected $logoblock;

    public function __construct(
    \Magento\Framework\App\Helper\Context $context, \Magento\Theme\Block\Html\Header\Logo $logoblock, \Magento\Store\Model\StoreManagerInterface $storeManager
    ) {
        $this->logoblock = $logoblock;
        $this->_storeManager = $storeManager;
        parent::__construct($context);
    }

    public function getBaseUrl() {
        return $this->_storeManager->getStore()->getBaseUrl();
    }

    public function getIsHomePage() {
        return $this->logoblock->isHomePage();
    }

    public function getMediaUrl() {
        return $this->_storeManager->getStore()->getBaseUrl(\Magento\Framework\UrlInterface::URL_TYPE_MEDIA);
    }

    public function getCurrentUrl() {
        return $this->_urlBuilder->getCurrentUrl(); // Give the current url of recently viewed page
    }

    /* top header notification */

    public function getTopheadernotification() {
        return $this->scopeConfig->getValue('cpanelsection/headergroup/top_header_notification', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Show sharing addon or not */

    public function getShowsharingaddon() {
        return $this->scopeConfig->getValue('cpanelsection/headergroup/sharingaddon', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get Add this pub ID */

    public function getAddthispubid() {
        return $this->scopeConfig->getValue('cpanelsection/headergroup/pubid', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get enable home link in navigation */

    public function getEnablehomelink() {
        return $this->scopeConfig->getValue('cpanelsection/headergroup/addhomelink', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get Footer Newsletter Title */

    public function getShowfooternewsletter() {
        return $this->scopeConfig->getValue('cpanelsection/footergroup/shownewsletter', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get Footer Newsletter Title */

    public function getFooternewslettertitle() {
        return $this->scopeConfig->getValue('cpanelsection/footergroup/footer_newsletter_title', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get Footer Newsletter Test */

    public function getFooternewslettertext() {
        return $this->scopeConfig->getValue('cpanelsection/footergroup/footer_newsletter_text', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }


    /* Get Footer logo */

    public function getFooterlogo() {
        return $this->scopeConfig->getValue('cpanelsection/footergroup/footer_logo', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get Footer social icons */

    public function getShowsocialicons() {
        return $this->scopeConfig->getValue('cpanelsection/footergroup/showsocial', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get Footer facebook enable/disable */

    public function getShowfacebook() {
        return $this->scopeConfig->getValue('cpanelsection/footergroup/showfacebook', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get Footer facebook url */

    public function getFacebookurl() {
        return $this->scopeConfig->getValue('cpanelsection/footergroup/facebook_link', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get Footer twitter enable/disable */

    public function getShowtwitter() {
        return $this->scopeConfig->getValue('cpanelsection/footergroup/showtwitter', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get Footer twitter url */

    public function getTwitterurl() {
        return $this->scopeConfig->getValue('cpanelsection/footergroup/twitter_link', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get Footer linkdn enable/disable */

    public function getShowlinkedin() {
        return $this->scopeConfig->getValue('cpanelsection/footergroup/showlinkedin', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get Footer linkdn url */

    public function getLinkdnurl() {
        return $this->scopeConfig->getValue('cpanelsection/footergroup/linkedin_link', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get Footer pinterest enable/disable */

    public function getShowpinterest() {
        return $this->scopeConfig->getValue('cpanelsection/footergroup/showpinterest', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get Footer pinterest url */

    public function getPinteresturl() {
        return $this->scopeConfig->getValue('cpanelsection/footergroup/pinterest_link', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get product new label enable/disable */

    public function getShowproductnewlabel() {
        return $this->scopeConfig->getValue('cpanelsection/listpagegroup/newlabel', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get product sale label enable/disable */

    public function getShowproductsalelabel() {
        return $this->scopeConfig->getValue('cpanelsection/listpagegroup/salelabel', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get product view page sharing addon enable/disable */

    public function getShowproductviwesharing() {
        return $this->scopeConfig->getValue('cpanelsection/viewpagegroup/sharingaddon', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get product view page sharing addon pub ID */

    public function getShowproductviwesharingid() {
        return $this->scopeConfig->getValue('cpanelsection/viewpagegroup/pubid', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get product view page related and crosssell products */

    public function getShowrelatedupsell() {
        return $this->scopeConfig->getValue('cpanelsection/viewpagegroup/showproducts', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get show contact page google map enable/disable */

    public function getShowrgooglemap() {
        return $this->scopeConfig->getValue('cpanelsection/contactpagegroup/showgooglemap', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get show contact page google map Embeded Code */

    public function getGooglemapembedcode() {
        return $this->scopeConfig->getValue('cpanelsection/contactpagegroup/embedcode', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get show contact store name */

    public function getContactstorename() {
        return $this->scopeConfig->getValue('cpanelsection/contactpagegroup/storename', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get show contact store address */

    public function getContactstoreaddress() {
        return $this->scopeConfig->getValue('cpanelsection/contactpagegroup/storeaddress', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get show store contactno */

    public function getStorecontactno() {
        return $this->scopeConfig->getValue('cpanelsection/contactpagegroup/contactinfo', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

    /* Get show store contactno */

    public function getStorecontactemail() {
        return $this->scopeConfig->getValue('cpanelsection/contactpagegroup/storeemail', \Magento\Store\Model\ScopeInterface::SCOPE_STORE);
    }

}
