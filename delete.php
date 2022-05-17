<?php
    include_once("db_koneksi2.php");
    
    if(isset($_GET["id"])){
        $sql = "DELETE FROM sparepart WHERE id_sparepart = '".$_GET["id"]."'";
        $hsl = mysqli_query($cnn, $sql);
    }
    mysqli_close($cnn);
    header("location: show.php");