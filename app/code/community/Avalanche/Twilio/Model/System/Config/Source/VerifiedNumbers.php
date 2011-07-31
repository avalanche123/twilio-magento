<?php

require_once 'Twilio/Services/Twilio.php';

class Avalanche_Twilio_Model_System_Config_Source_VerifiedNumbers
{

    /**
     * Options getter
     *
     * @return array
     */
    public function toOptionArray()
    {
        $client = Mage::getSingleton('twilio/twilio');
        $values = array();

        foreach ($client->account->outgoing_caller_ids as $number) {
            $values[] = array(
                'value' => $number->phone_number,
                'label' => $number->friendly_name,
            );
        }

        return $values;
    }

}
