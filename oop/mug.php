<?php

class Mug
{
    //(color - price - size)
    private string $color;
    public float $price;
    public float $size;

    public function drinkingHotDrink($drinkType)
    {
        return $drinkType;
    }
}
$mug1 = new Mug;
$mug1->color = "red";
$mug1->price = 120;
$mug1->size = 250;
echo $mug1->drinkingHotDrink("coffee");