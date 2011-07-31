<?php

require_once 'Twilio/Services/Twilio.php';

class Avalanche_Twilio_Model_System_Config_Source_ApplicationSid
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

        foreach ($client->account->applications as $app) {
            $values[] = array(
                'value' => $app->sid,
                'label' => $app->friendly_name . ' (' . $app->sid . ')'
            );
        }

        return $values;
    }

}
