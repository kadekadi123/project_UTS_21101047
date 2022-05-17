<?php

function insertdata($pdata){

    $sqlINSERT = "INSERT INTO sparepart (id_sparepart, type_sparepart, name_sparepart, stock_sparepart, price_sparepart) 
    VALUES('".$pdata["ID"]."', '".$pdata["TYPE"]."', '".$pdata["NAME"]."', '".$pdata["STOCK"]."', '".$pdata["PRICE"]."');";

    include_once("db_koneksi2.php");
    $hsl = mysqli_query($cnn, $sqlINSERT);
    return $hsl;
}

function updatedata($pdata){
    $sql = "UPDATE sparepart SET
        id_sparepart = '".$pdata["ID2"]."',
        type_sparepart = '".$pdata["TYPE"]."',
        name_sparepart = '".$pdata["NAME"]."',
        stock_sparepart = '".$pdata["STOCK"]."',
        price_sparepart = '".$pdata["PRICE"]."'
        WHERE id_sparepart = '".$pdata["ID1"]."';";

    include_once("db_koneksi2.php");
    $hsl = mysqli_query($cnn, $sql);
    return $hsl;
}

function displaydata(){
    include_once("db_koneksi2.php");
    $sql = "SELECT * FROM sparepart;";
    $hsl = mysqli_query($cnn,$sql);
    $hsl1 = "";
    $i = 1;
    while($h = mysqli_fetch_array($hsl)){
        $hsl1 .= '<tr>
        <td class="text-center">'.$i.'</td>
        <td class="text-center">'.$h["id_sparepart"].'</td>
        <td class="text-center">'.$h["type_sparepart"].'</td>
        <td class="text-center">'.$h["name_sparepart"].'</td>
        <td class="text-center">'.$h["stock_sparepart"].'</td>
        <td class="text-center">'.$h["price_sparepart"].'</td>
        <td class = "text-center">
            <a class="btn btn-outline-primary px-4" href="edit.php?id='.$h["id_sparepart"].'">
            Edit
            </a>
        </td>
        <td class = "text-center">
            <a class="btn btn-outline-warning px-4" href="delete.php?id='.$h["id_sparepart"].'" onClick=\'return confirm("Delete data?");\'>
            Delete
            </a>
        </td>
    </tr>';
    $i++;
    }
    return $hsl1;
}