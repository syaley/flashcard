<?php

//Créer une connexion
function getPdoLink($config){
    $dsn = 'mysql:dbname=' . $config['database'] . ';host=' . $config['host'] . ';port=' . $config['port'] . ';charset=utf8';
    try {
        $pdo = new PDO($dsn, $config['user'], $config['password']);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connexion réussie"; 
        return $pdo;
    } catch (PDOException $e) {
        echo $e->getMessage();
    }

}