<?php
declare(strict_types=1);
class Chair
{
    public string $color;
    public float $price;
    public string $brand;

    public function setting(string $bodyWeight): string
    {
        return $bodyWeight;
    }
}
$chair1 = new Chair();
$chair1->color = "brown";
$chair1->price = 1500;
$chair1->brand = "ikea";
$chair1->setting("90kg");