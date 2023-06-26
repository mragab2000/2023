<?php
class Cars
{
    public string $brand;
    public string $model;
    public int $releaseDate;

    public function autoDriving(bool $ad): bool
    {
        if ($ad == true) {

        }
    }
    public function autoParking(bool $ap): bool
    {
        if ($ap == true) {

        }
    }
    public function drivingMode(bool $eco, bool $sport, bool $comfort): bool
    {

    }
}
$volvo = new Cars();
$volvo->brand = "volvo";
$volvo->model = "s60";
$volvo->releaseDate = 2012;
$volvo->autoDriving(true);
$volvo->autoParking(true);
$volvo->drivingMode(true, true, false);

$skoda = new Cars();
$skoda->brand = "skoda";
$skoda->model = "octavia";
$skoda->releaseDate = 2018;
$skoda->autoDriving(false);
$skoda->autoParking(false);
$skoda->drivingMode(true, false, false);

$kia = new Cars();
$kida->brand = "kia";
$kia->model = "cerato";
$kia->releaseDate = 2020;
$kia->autoDriving(true);
$kia->autoParking(true);
$kia->drivingMode(true, true, true);