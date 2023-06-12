<?php

function getConnectionPostgres()
{
    $host = 'localhost'; // Adresse du serveur PostgreSQL
    $port = '5432'; // Port du serveur PostgreSQL (par défaut 5432)
    $dbname = 'TD_MrRojo'; // Nom de la base de données PostgreSQL
    $user = 'postgres'; // Nom d'utilisateur PostgreSQL
    $password = 'postgres'; // Mot de passe PostgreSQL

    // Connexion à la base de données
    $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");

    if (!$conn) {
        echo "Erreur lors de la connection !";
    } else {
        return $conn;   
    }
}

echo getConnectionPostgres();