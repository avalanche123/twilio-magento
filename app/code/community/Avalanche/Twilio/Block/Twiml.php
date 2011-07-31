<?php

class Avalanche_Twilio_Block_Twiml extends Mage_Core_Block_Template
{
    protected $phoneNumber;
    protected $callerId;

    public function setPhoneNumber($phoneNumber)
    {
        $this->phoneNumber = $phoneNumber;

        return $this;
    }

    public function setCallerId($callerId)
    {
        $this->callerId = $callerId;
    }

    public function getCallerIdString()
    {
        return ' callerId="'. $this->callerId .'"';
    }

    public function getRecepient()
    {
        return "<Number>" . $this->phoneNumber . "</Number>";
    }
}
