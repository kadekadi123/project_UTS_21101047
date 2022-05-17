<?php

include_once("db_koneksi2.php");

$sql = "CREATE TABLE sparepart (
  id_sparepart varchar(10) PRIMARY KEY,
  type_sparepart varchar(20),
  name_sparepart varchar(20),
  stock_sparepart varchar(10),
  price_sparepart varchar(50)
);";

$hsl = mysqli_query($cnn, $sql);
    if($hsl){
        echo "Create table sparepart <i>Success</i><br>";
    }else{
        echo "Create table sparepart <i>Failed</i><br>";
    }

mysqli_close($cnn);