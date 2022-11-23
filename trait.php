<?php 

trait Notifiable
{
  public function notify($message)
  {
    echo $message;
  }  
}

class SMS
{
  use Notifiable;
}

class Email
{
  use Notifiable;
}


class PushNotification
{
  use Notifiable;
}

$sms = new SMS();

$sms->notify("We are doing a promo, dail *15262*21# to stand a chance to win a car.");


$email = new email ();

$email->notify("You Have an email");

$PushNotification = new PushNotification ();
$PushNotification->notify("Hi");

?>