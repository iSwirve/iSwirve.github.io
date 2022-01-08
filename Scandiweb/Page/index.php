<?php

require "../Controller/Product.php";


function alert($message) {
    echo "<script>alert('$message');</script>";
}

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Product List</title>
</head>

<body style="margin: 10px;">
    <form action="" method="post">
        <div class="container">
            <h1 style="float: left;">Product List</h1>
            <div style="float: right;">
                <button type="button" class="btn btn-success" name="addBtn" onclick="location.href='addProduct.php'">ADD</button>
                <button class="btn btn-danger" name="john" id="delete-product-btn">MASS DELETE</button>
            </div>
            <br>
            <br>    
            <div style="border: 1px solid black;">

            </div>
        </div>
    </form>
</body>

<script>
    $(document).ready(function() {

        $("#delete-product-btn").click(function() {
            $.ajax({
                    url: "../Controller/controller.php",
                    method: "post",
                    data: {
                        action: "mass-delete",
                    }
                })

                .done((data) => {
                    alert(data);
                })
        })

    })
</script>

</html>