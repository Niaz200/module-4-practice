<?php

//code1:

/*

class Reservation
{
    private $host  = "Host Class";
    private $guest = "Guest Class";

    //Cancel
    public function cancel()
    {
        // Check whether cancellation is an option
        // Refund the guest ... if refunds applicable [Guest]
        // Make the room available again [Room]
        // Notify the host [Host]
            // In app notification [Notification]
            // Send them an email / SMS  [Email, SMS]
        // Send confirmation to guest [Email, SMS]

        $this->sendCancelNotification();
        $this->refundGuest();
    }


    private function sendCancelNotification()
    {
        //Send notification
        echo "Send Cancel Notification " . $this->host . PHP_EOL;
    }


    private function refundGuest()
    {
        //Refund the guest
        echo "Refund Guest " . $this->guest . PHP_EOL;
    }

}


$reservation = new Reservation();
echo $reservation->cancel();

*/


//code2:

/*

class Reservation
{
    private $host  = "Host Class";
    private $guest = "Guest Class";

    //Cancel
    public function cancel()
    {
       

        $this->sendCancelNotification();
        $this->refundGuest();
    }


    private function sendCancelNotification()
    {
        //Send notification
        echo "Send Cancel Notification " . $this->host . PHP_EOL;
    }


    private function refundGuest()
    {
        //Refund the guest
        echo "Refund Guest " . $this->guest . PHP_EOL;
    }

}


$reservation = new Reservation();
echo $reservation->cancel();

*/

//code3:


//code2:

class Reservation
{
    private $host  = "Prince";
    private $guest = "Noman";

    //Cancel
    public function cancel()
    {
       

        $this->sendCancelNotification();
        $this->refundGuest();
    }


    private function sendCancelNotification()
    {
        //Send notification
        echo "Send Cancel Notification " . $this->host . PHP_EOL;
    }


    private function refundGuest()
    {
        //Refund the guest
        echo "Refund Guest " . $this->guest . PHP_EOL;
    }

}


$reservation = new Reservation();
echo $reservation->cancel();