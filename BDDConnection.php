<?php

$nameU = $_POST["name"];
$passwordU = $_POST["pass"];
$emailU = $_POST["email"];

class BDDConnection
{

    private $pdo;

    public function getPDO()
    {
        $pdo = new PDO('mysql:host=localhost;dbname=exophp', 'root', '');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $this->pdo = $pdo;
        return $pdo;
    }

    public function addUser($nameU, $passwordU, $emailU)
    {
        $pdo->exec('INSERT INTO users (Name, Password, Mail) VALUES ($nameU, $passwordU, $emailU)');
    }
}

?>