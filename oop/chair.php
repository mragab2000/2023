<?php

class Chair
{
    public string $color;
    public float $price;
    public string $brand;

    public function backPainTreatment($painType)
    {
        return $painType;
    }
}
$chair1 = new Chair;
$chair1->color = "brown";
$chair1->price = 1500;
$chair1->brand = "ikea";
$chair1->backPainTreatment("spine issue");