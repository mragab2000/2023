<?php
	
  class Pen
    {
		//variables 
  		public string $color;
  		public float $price;
  		public string $expirationDate;
          
          public function write($text)
        {
          
          return $text;
        }
  
    }
	
	$pen1 = new pen();
	$pen1->color = "red";
	$pen1->price = "15";
    $pen1->expirationDate = "1/jun/2024";
	$pen1->write("Hello");