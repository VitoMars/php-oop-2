<?php

require_once "Order.php";

class Product extends Order
{
   public $name;
   public $category;
   public $seller;
   public $img;
   public $details;
   protected $price;
   protected $stars;

   function __construct($_name, $_category, $_seller, $_img, $_details, $_price, $_stars)
   {
      $this->name = $_name;
      $this->category = $_category;
      $this->seller = $_seller;
      $this->img = $_img;
      $this->details = $_details;
      $this->price = $_price;
      $this->stars = $_stars;
   }
}
