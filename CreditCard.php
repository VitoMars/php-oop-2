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

   function number($int)
   {
      if (!is_int($int)) {
         throw new Exception("Is not a number");
      }
      return $int;
   }

   function insertCreditCard($_credit_card)
   {
      try {
         $this->number($_credit_card);
      } catch (Exception $e) {
         echo 'Eccezione: ' . $e->getMessage();
      }
   }
}

$credit1 = new CreditCard("Vito Marseglia", 4033185673134561, "06/22", 654, "Visa");

// $user1->insertCreditCard($credit1);

// echo $this->number(50);

var_dump($credit1);
