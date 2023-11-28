<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "banhang1";

    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn) {
        echo "Connection Failed.";
    }
?>