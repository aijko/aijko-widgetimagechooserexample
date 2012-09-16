<?php
/**
 * Example teaser block.
 *
 * @category    Aijko
 * @package     Aijko_WidgetImageChooserExample
 * @author      Gerrit Pechmann <gp@aijko.de>
 * @copyright   Copyright (c) 2012 aijko GmbH (http://www.aijko.de)
 */
class Aijko_WidgetImageChooserExample_Block_Teaser extends Mage_Core_Block_Template
{
    /**
     * Set default template.
     *
     * @return void
     */
    protected function _construct()
    {
        $this->setData('template', 'aijko/widgetimagechooserexample/teaser.phtml');
        parent::_construct();
    }

    /**
     * Return absolute url to the image file.
     *
     * @return string
     */
    public function getImageUrl()
    {
        return Mage::getBaseUrl('media') . $this->getImage();
    }
}