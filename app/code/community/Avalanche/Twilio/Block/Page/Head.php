<?php

require_once 'Twilio/Services/Twilio.php';

class Avalanche_Twilio_Block_Page_Head extends Mage_Core_Block_Template
{
    /**
     * Initialize template
     *
     */
    protected function _construct()
    {
        $this->setTemplate('twilio/page/head.phtml');
    }
}
