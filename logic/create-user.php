<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
 
     require __DIR__ . '/../config/connexion.php';

    if (
        isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password'])
    ) {
        $newUser =  $_POST;
        
    };

    $query = $db->prepare('INSERT INTO users (email, password, first_name, last_name) VALUES (:email, :password, :first_name, :last_name)');
 
    $parameters = [
        ':email' => $newUser['email'],
        ':password' => $newUser['password'],
        ':first_name' => $newUser['first_name'],
        ':last_name' => $newUser['last_name'],
    ];

    $query->execute($parameters);


