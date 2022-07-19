<?php
include 'dbh.inc.php';


$price=$_GET['price'];
$name=$_GET['moviename'];
$sql="update movie set price='$price' where name='$name'";

    mysqli_query($conn, $sql);
    header("Location: ../update_movie.php?update=success");


