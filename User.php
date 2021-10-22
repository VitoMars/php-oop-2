<?php

class User
{
   public $name;
   public $surname;
   public $email;
   public $password;
   public $orders;
   public $address;
   public $phone;
   public $premium;

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
}

$user1 = new User("Alessio", "Vietri", "alessio.vietri@gmail.com", "AlessioVietriLaBestia", "Via introvabile senza numero civico", "333-3456789", true);
$user2 = new User("Vito", "Marseglia", "vito95v@gmail.com", "cicciolina95", "Dove il signore ha perso le scarpe", "333-987654321", true);
var_dump($user1, $user2);
