<?php

namespace Src;

class Reservation
{
    public integer $timestamp;
    public string $name;
    public string $email;

    public function SaveReservation() : bool
    {
        //save reservation dans la database
    }
}