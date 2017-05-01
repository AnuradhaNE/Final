<?php
     $dsn = 'mysql:host=sql2.njit.edu;dbname=adn24';
    $username = 'adn24';
    $password = '75z72ZtHZ';


    try {
        $db = new PDO($dsn, $username, $password);
    
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('../errors/database_error.php');
        exit();
    }
?>
