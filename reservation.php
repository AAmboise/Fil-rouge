<?php

use Src\Reservation;

require "vendor/autoload.php";

//si ! method post => exit, si pas de données, exit
if ($SERVER['REQUEST_METHOD'] !== "POST" || !empty($_POST)); exit;

$reservation = new Reservation;

try {
    $reservation->SaveReservation($formdata);
    header('Location: sucess.php');
} catch (\Throwable $th) {
    header('Location: fail.php');
}