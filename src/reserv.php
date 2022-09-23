<?php

namespace Src;

class Reservation
{
    private integer $timestamp; //date choisie
    private string $name; // nom de la personne
    private string $email; // email de la personne

    public function __construct(array $data)
    {
        $this->timestamp = $data['timestamp'];
        $this->name = $data['name'];
        $this->email = $data['email'];
    }
    public function SaveReservation() : bool
    {
        $db = new \PDO('mysql:host=localhost;dbname=test', $user, $pass);
        $db->query('INSERT INTO reservation (...)');
    }
}