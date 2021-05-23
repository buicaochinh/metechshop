<?php

namespace Solwin\Cpanel\Plugin;


class Config
{

 protected $activeEditor;

    public function __construct(\Magento\Ui\Block\Wysiwyg\ActiveEditor $activeEditor)
    {
        $this->activeEditor = $activeEditor;
    }

    /**
     * Return WYSIWYG configuration
     *
     * @param \Magento\Ui\Component\Wysiwyg\ConfigInterface $configInterface
     * @param \Magento\Framework\DataObject $result
     * @return \Magento\Framework\DataObject
     */
    public function afterGetConfig(
        \Magento\Ui\Component\Wysiwyg\ConfigInterface $configInterface,
        \Magento\Framework\DataObject $result
    ) {

        // Get current wysiwyg adapter's path
        $editor = $this->activeEditor->getWysiwygAdapterPath();

        // Is the current wysiwyg tinymce v4?
        if(strpos($editor,'tinymce4Adapter')){

          if (($result->getDataByPath('settings/menubar')) || ($result->getDataByPath('settings/toolbar')) || ($result->getDataByPath('settings/plugins'))){
              // do not override ui_element config (unsure if this is needed)
              return $result;
          }

          $settings = $result->getData('settings');

          if (!is_array($settings)) {
              $settings = [];
          }

          // configure tinymce settings
          $settings['valid_elements'] = '*[*]';
          $settings['valid_children'] = '+body[style],+div[a],+p[strong|a|#text],+a[div]';

          $result->setData('settings', $settings);
          return $result;
        }
        else{ // don't make any changes if the current wysiwyg editor is not tinymce 4
            return $result;
        }
    }
}
