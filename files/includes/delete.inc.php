<?php

include 'dbh.inc.php';

$moviename = $_GET['moviename'];

$sql = "DELETE FROM movie WHERE name='$moviename';";
$print=mysqli_query($conn, $sql);

//echo "$print";
header("Location: ../deletemovie.php?delete=success");


{
  //  header("Location: ../deletemovie.php?error=no");

}
