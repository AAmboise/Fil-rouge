<?php

use Src\Reservation;

require "vendor/autoload.php";

$formdata = $_POST;


if ($SERVER['REQUEST_METHOD'] !== "POST" || !empty($formdata))
{
    exit;
}

$reservation = new Reservation;
$reservation->SaveReservation($formdata);