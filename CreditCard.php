<?php

class CreditCard extends User
{
   private $card_holder; //Intestatario
   private $number;
   private $expiration;
   private $cvv;
   private $circuit;

   function __construct($_card_holder, $_number, $_expiration, $_cvv, $_circuit)
   {
      $this->card_holder = $_card_holder;
      $this->number = $_number;
      $this->expiration = $_expiration;
      $this->cvv = $_cvv;
      $this->circuit = $_circuit;
   }
}

$credit1 = new CreditCard("Vito Marseglia", "4033-1856-7313-4561", "06/22", 654, "Visa");

var_dump($credit1);
