<?php

class Avalanche_Twilio_TwilioController extends Mage_Core_Controller_Front_Action
{
    protected $failed;

    public function twimlAction()
    {
        $this->loadLayout();

        $this->getResponse()
            ->setHttpResponseCode(200)
            ->setHeader('Content-type', 'text/xml', true)
        ;

        $block       = $this->getLayout()->getBlock('twiml');
        $phoneNumber = Mage::getStoreConfig('contacts/twilio/phone_number');
        $callerId    = Mage::getStoreConfig('contacts/twilio/caller_id');

        if ($phoneNumber && $callerId) {
            $block->setPhoneNumber($phoneNumber);
            $block->setCallerId($callerId);
        }

        $this->renderLayout();
    }
}
