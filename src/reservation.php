<?php

namespace Src;

use Src\Database;

class Reservation
{
    private \PDO $db;

    public function __construct()
    {
        $this->db = new Database;
    }
    public function SaveReservation(array $data) : bool
    {
        $date = $data['timestamp'];
        $name = $data['name'];
        $email = $data['email'];
        //creer une requete SQL
        $req = $this->db->prepare('INSERT INTO reservation VALUES (:date, :name, :email)');

        $req->bindValue(':email', $email);
        $req->bindValue(':name', $name);
        $req->bindValue(':date', $date);
        try {
            $req->execute();
            return true;    
        } catch (\PDOException $th) {
            echo $th;
            return false;
        }
    }
    public function getAvailableDate()
    {
        //....
    }
}