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
            && Mage::getStoreConfig('twilio/config/auth_token')
            && Mage::getStoreConfig('contacts/twilio/application_sid')
            && Mage::getStoreConfig('contacts/twilio/caller_id')
            && Mage::getStoreConfig('contacts/twilio/phone_number')
        ;
    }

    public function getCapability()
    {
        return new Services_Twilio_Capability($this->accountSid, $this->authToken);
    }
}
