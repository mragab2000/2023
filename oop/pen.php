<?php
declare(strict_types=1);
class Pen
{
  public string $color;
  public float $price;
  public string $expirationDate;

  public function write(string $text):string
  {

    return $text;
  }

}

$pen1 = new pen();
$pen1->color = "red";
$pen1->price = 15;
$pen1->expirationDate = "1/jun/2024";
$pen1->write("Hello");