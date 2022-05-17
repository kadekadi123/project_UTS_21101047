<?php
    include("crud.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Display Data</title>
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS -->
    <style>
        .container{
            margin-top: 4rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row align-items-center">
            <div>
                <h2 class="mb-3 fw-bold text-center">Data Sparepart</h2>
            </div>
        </div>        
        <div>
            <table class="table align-middle">
                <thead class="table-secondary">
                    <tr class="text-center">
                        <th class = "py-4">No</th>
                        <th class = "py-4">ID Sparepart</th>
                        <th class = "py-4">Type</th>
                        <th class = "py-4">Name</th>
                        <th class = "py-4">Stock</th>
                        <th class = "py-4">Price</th>
                        <th colspan="2"><a href='insert_tablesparepart.php'><input class="btn btn-outline-dark py-2 my-2 px-4" type="button" value="ADD"></a></th>
                    </tr>
                </thead>
                <tbody>
                    <?=displaydata();?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>