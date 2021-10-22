<?php

class Order
{
   public $shipping_address;
   public $quantity;
   public $date;
   protected $price;

   function __construct($_shipping_address, $_quantity, $_date, $_price)
   {
      $this->shipping_address = $_shipping_address;
      $this->quantity = $_quantity;
      $this->date = $_date;
      $this->price = $_price;
   }
}
