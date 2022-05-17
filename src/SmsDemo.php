<?php


use Twilio\Rest\Client;

class SmsDemo {

    public static function sendText()
    {
        $sid = getenv("TWILIO_ACCOUNT_SID");
        $token = getenv('TWILIO_AUTH_TOKEN');

        $twilio = new Client($sid, $token);

        $demo_phone_number = getenv('TWILIO_DEMO_PHONE_NUMBER');
        $message_service_id = getenv("TWILIO_MESSAGING_SERVICE_ID");
        $twilio_number = getenv("TWILIO_PHONE_NUMBER");
        $from_header = getenv("TWILIO_FROM_LABEL");

        $message = $twilio->messages
            ->create(
                $demo_phone_number,
                array(
                    'from' => $twilio_number,
                    "messagingServiceSid" => $message_service_id,
                    "body" => "$from_header This is a demo text from Let's Innovate!"
                )
            );

        print("Status Response from message sending: <br>");
        print("<pre>");
        print_r($message->status);
        print("</pre>");

    }

}

