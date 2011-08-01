<?php

class Avalanche_Twilio_Block_Client extends Mage_Core_Block_Template
{
    protected $clientId;

    public function setClientId($clientId)
    {
        $this->clientId = $clientId;
    }

    protected function getCapability()
    {
        return Mage::getSingleton('twilio/twilio')->getCapability();
    }

    public function getOutboundToken()
    {
        $capability = $this->getCapability();

        $capability->allowClientOutgoing(Mage::getStoreConfig('contacts/twilio/application_sid'));
        return $capability->generateToken();
    }

    public function getInboundToken()
    {
        $capability = $this->getCapability();

        $capability->allowClientIncoming($this->clientId);
        return $capability->generateToken();
    }

    protected function _toHtml()
    {
        if (Avalanche_Twilio_Model_Twilio::isSetUp()) {
            return parent::_toHtml();
        }
    }
}
