<?php
    session_start();
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "scandiweb";

    $conn = mysqli_connect($servername,$username,$password,$dbname);

    if($conn->connect_error)
    {
        die("Connection Failed : ".mysqli_connect_error());
    }

    function alert($message) {
        echo "<script>alert('$message');</script>";
    }

?>