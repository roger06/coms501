<?php
// added to gitignore as this is different for different systems
 
//show errors
error_reporting(E_ALL);
ini_set('display_errors', 1);


//connect to db
// $db = new PDO('mysql:host=localhost; dbname=joins-sample;','roger','roger');
// $db = new PDO('mysql:host=localhost; dbname=sakila;','roger','roger');
$db = new PDO('mysql:host=localhost; dbname=sakila;','root','');  // XAMPP
 
// var_dump($db);


?>
