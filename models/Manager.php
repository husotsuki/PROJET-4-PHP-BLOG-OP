<?php

namespace models;

class Manager {

    // Connexion à la base de données
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=forteroche;charset=utf8', 'root', '');
        return $db;
    }

}