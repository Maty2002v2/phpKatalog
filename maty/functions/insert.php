<?php

require_once("connect.php");

    $marka = $_GET['marka'];
    $model = $_GET['model'];
    $rocznik = $_GET['rocznik'];
    $kolor = $_GET['kolor'];
    $rS = $_GET['rS'];

$sql = "INSERT INTO cars (ID,Brand, Model, Vinage, Color, Gearbox) VALUES('','$marka','$model','$rocznik','$kolor','$rS')";

if (mysqli_query($conn, $sql)) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
  }
