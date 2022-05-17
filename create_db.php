<?php
include_once("db_koneksi1.php");

if($cnn){
    $sql = "CREATE DATABASE dbsparepart;";

    $hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Create Database <i>Success</i><br>";
    }else{
        echo "Create Database <i>Failed</i><br>";
    }
    mysqli_close($cnn);
}