<?php

function getConnectionPostgres()
{
    $host = 'localhost'; // Adresse du serveur PostgreSQL
    $port = '5432'; // Port du serveur PostgreSQL (par défaut 5432)
    $dbname = 'TD_MrRojo'; // Nom de la base de données PostgreSQL
    $user = 'postgres'; // Nom d'utilisateur PostgreSQL
    $password = 'postgres'; // Mot de passe PostgreSQL

    // Connexion à la base de données
    try {
        $conn = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password");
        
    } catch (Exception $e) {
        echo "Erreur : " . $e->getMessage();
    }

}

echo getConnectionPostgres();