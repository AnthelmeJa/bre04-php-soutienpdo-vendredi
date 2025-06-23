<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */

    require __DIR__ . '/../config/connexion.php';
    
        if (
            isset($_POST['first_name'], $_POST['last_name'], $_POST['email'], $_POST['password'],$_POST['id'])
        ) {
            $updateUser =  $_POST;
            
        };
    
    $query = $db->prepare('UPDATE users SET email = :email, password = :password, first_name = :first_name, last_name = :last_name WHERE id = :id');
 
    $parameters = [
        ':id' => $updateUser['id'],
        ':email' => $updateUser['email'],
        ':password' => $updateUser['password'],
        ':first_name' => $updateUser['first_name'],
        ':last_name' => $updateUser['last_name'],
    ];

    $query->execute($parameters);