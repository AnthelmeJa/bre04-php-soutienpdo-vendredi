<?php
/**
 * @author : Gaellan
 * @link : https://github.com/Gaellan
 */
 
    if (isset($_GET['id'])) {
        $userId =  $_GET['id'];
    }
    
    $query = $db->prepare('DELETE FROM users WHERE id = :id');
    $parameters = [':id' => $userId];
    $query->execute($parameters);
    

