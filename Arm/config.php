<?php

session_start();

$db_con = 'mysql:host=localhost;dbname=arm';
$user = 'root';
$pass = '';

$object1 = new PDO($db_con, $user, $pass);

try {
    $object1 -> execute();
} catch (\Throwable $th) {
    $error = $th -> getMessage();
}

?>