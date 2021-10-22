<?php

class User
{
   public $name;
   public $surname;
   public $email;
   public $password;
   public $address;
   public $phone;
   public $premium;
   public $sconto = 0;

   function __construct($_name, $_surname, $_email, $_password, $_address, $_phone, $_premium)
   {
      $this->name = $_name;
      $this->surname = $_surname;
      $this->email = $_email;
      $this->password = $_password;
      $this->address = $_address;
      $this->phone = $_phone;
      $this->premium = $_premium;
   }

   public function setSconto($_premium)
   {
      if ($_premium == true) {
         $this->sconto = 25;
      }
      $this->getSconto();
   }

   public function getSconto()
   {
      return $this->sconto;
   }

   function insertCreditCard($_credit_card)
   {
      return $_credit_card;
   }
}

$user1 = new User("Alessio", "Vietri", "alessio.vietri@gmail.com", "AlessioVietriLaBestia", "Via introvabile senza numero civico", "333-3456789", true);
$user2 = new User("Vito", "Marseglia", "vito95v@gmail.com", "cicciolina95", "Dove il signore ha perso le scarpe", "333-987654321", false);

$user1->setSconto(true);
$user2->setSconto(false);

$user1->insertCreditCard($credit1);

var_dump($user1, $user2);
