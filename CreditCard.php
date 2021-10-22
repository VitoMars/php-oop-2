<?php

class CreditCard
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
