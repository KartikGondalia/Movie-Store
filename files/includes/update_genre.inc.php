<?php
include 'dbh.inc.php';


$genre=$_GET['genre'];
$name=$_GET['moviename'];
$sql="update movie set genre='$genre' where name='$name'";

    mysqli_query($conn, $sql);
    header("Location: ../update_movie.php?update=success");


