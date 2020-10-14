<?php


$config = ['host' => 'localhost',
'database' => 'cars',
'user' => 'root',
'password' => ''];

$conn = mysqli_connect(
    $config['host'], 
    $config['user'], 
    $config['password'], 
    $config['database']
);

mysqli_set_charset($conn, "UTF8");

if(!$conn){
    die("Failed" . mysqli_connect_error());
}   
?>