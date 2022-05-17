<?php

if(isset($_POST["txSIMPAN"])){
    $pdata["ID"] = $_POST["txID"];
    $pdata["TYPE"] = $_POST["txTYPE"];
    $pdata["NAME"] = $_POST["txNAME"];
    $pdata["STOCK"] = $_POST["txSTOCK"];
    $pdata["PRICE"] = $_POST["txPRICE"];

    include_once("crud.php");
    insertdata($pdata);
    header("location:show.php");
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Insert Data Mahasiswa</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
<div class="container">
        <h1 class="my-4">Insert Data Sparepart</h1>
        <form action="" method="POST">
        <div class="form-group row my-3">
            <label for="idsparepart" class="col-sm-2 col-form-label">ID SPAREPART</label>
            <div class="col-sm-10">
            <input type="text" name="txID" class="form-control form-control-sm w-25">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="type" class="col-sm-2 col-form-label">TYPE</label>
            <div class="col-sm-10">
            <input type="text" name="txTYPE" class="form-control form-control-sm w-25">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="name" class="col-sm-2 col-form-label">NAME</label>
            <div class="col-sm-10">
            <input type="text" name="txNAME" class="form-control form-control-sm w-25">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="stock" class="col-sm-2 col-form-label">STOCK</label>
            <div class="col-sm-10">
            <input type="text" name="txSTOCK" class="form-control form-control-sm w-25">
            </div>
        </div>
        <div class="form-group row my-3">
            <label for="price" class="col-sm-2 col-form-label">PRICE</label>
            <div class="col-sm-10">
            <input type="text" name="txPRICE" class="form-control form-control-sm w-25">
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
