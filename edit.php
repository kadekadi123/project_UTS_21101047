<?php

if(isset($_POST["txSIMPAN"])){
    $pdata["ID1"] = $_POST["txLASTID"];
    $pdata["ID2"] = $_POST["txID"];
    $pdata["TYPE"] = $_POST["txTYPE"];
    $pdata["NAME"] = $_POST["txNAME"];
    $pdata["STOCK"] = $_POST["txSTOCK"];
    $pdata["PRICE"] = $_POST["txPRICE"];

    include_once("crud.php");
    updatedata($pdata);
    header("location:show.php");
}

    if(isset($_GET["id"])){
        include_once("db_koneksi2.php");
        $id = $_GET["id"];
        $sql = "SELECT * FROM sparepart WHERE id_sparepart='".$id."';";
        $hsl = mysqli_query($cnn, $sql);
        $h = mysqli_fetch_array($hsl);
    }

   

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Tabel</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h1 class="my-4">Edit Data Sparepart</h1>
        <form action="edit.php" method="POST">
        <input type="hidden" name="txLASTID" value="<?=$h['id_sparepart'];?>">
        <div class="form-group row my-3">
            <label for="idsparepart" class="col-sm-2 col-form-label">ID SPAREPART</label>
            <div class="col-sm-10">
            <input type="text" name="txID" class="form-control form-control-sm w-25" value="<?=$h['id_sparepart'];?>">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="type" class="col-sm-2 col-form-label">TYPE</label>
            <div class="col-sm-10">
            <input type="text" name="txTYPE" class="form-control form-control-sm w-25" value="<?=$h['type_sparepart'];?>">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="name" class="col-sm-2 col-form-label">NAME</label>
            <div class="col-sm-10">
            <input type="text" name="txNAME" class="form-control form-control-sm w-25" value="<?=$h['name_sparepart'];?>">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="stock" class="col-sm-2 col-form-label">STOCK</label>
            <div class="col-sm-10">
            <input type="text" name="txSTOCK" class="form-control form-control-sm w-25" value="<?=$h['stock_sparepart'];?>">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="price" class="col-sm-2 col-form-label">PRICE</label>
            <div class="col-sm-10">
            <input type="text" name="txPRICE" class="form-control form-control-sm w-25" value="<?=$h['price_sparepart'];?>">
            </div>
        </div>
        <div class="button ">
                <a href="show.php" class="btn btn-secondary me-3">Back</a>
                <button type="submit" class="save btn btn-dark" name="txSIMPAN">Save</button>     
            </div>
        </form>
    </div>
</body>
</html>


