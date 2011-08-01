<?php

require_once 'Twilio/Services/Twilio.php';

class Avalanche_Twilio_Model_Twilio extends Services_Twilio
{
    protected $accountSid;
    protected $authToken;

    public function __construct()
    {
        $decryptor  = Mage::helper('core');

        $this->accountSid = $decryptor->decrypt(Mage::getStoreConfig('twilio/config/account_sid'));
        $this->authToken  = $decryptor->decrypt(Mage::getStoreConfig('twilio/config/auth_token'));

        parent::__construct($this->accountSid, $this->authToken);
    }

    public static function isSetUp()
    {
        return Mage::getStoreConfig('twilio/config/account_sid')
            && Mage::getStoreConfig('twilio/config/auth_token');
    }

    public function getCapability()
    {
        return new Services_Twilio_Capability($this->accountSid, $this->authToken);
    }
}
