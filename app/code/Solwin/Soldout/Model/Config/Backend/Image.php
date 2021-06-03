<?php

namespace Solwin\Soldout\Model\Config\Backend;

class Image extends \Magento\Config\Model\Config\Backend\Image
{
    public function beforeSave()
    {
        $error_types = [
            1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini.',
            2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form.',
            3 => 'The uploaded file was only partially uploaded.',
            4 => 'No file was uploaded.',
            6 => 'Missing a temporary folder.',
            7 => 'Failed to write file to disk.',
            8 => 'A PHP extension stopped the file upload.'
        ];
        $value = $this->getValue();
        if(isset($value['error']))
        {
            if ($value['error'] != 0 && $value['name'] != '') {
                $objectManager = \Magento\Framework\App\ObjectManager::getInstance();
                $messageManager = $objectManager->create('Magento\Framework\Message\ManagerInterface');
                $messageManager->addError(__($error_types[$value['error']]));
            }
        }
        return parent::beforeSave();
    }
}
