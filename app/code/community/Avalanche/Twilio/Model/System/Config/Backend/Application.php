<?php

class Avalanche_Twilio_Model_System_Config_Backend_Application extends Mage_Core_Model_Config_Data
{
    protected function _beforeSave()
    {
        if ($this->isValueChanged()) {
            $twilio = Mage::getSingleton('twilio/twilio');
            $twilio->account->applications
                ->get($this->getValue())
                ->update('VoiceUrl', Mage::getBaseUrl().'twilio/twilio/twiml')
            ;
        }
    }
}
