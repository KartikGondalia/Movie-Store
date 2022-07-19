<?php

include 'dbh.inc.php';
        session_start();

$moviename = $_GET['mname'];

$sql = "DELETE FROM watchlater WHERE name='$moviename';";
$print=mysqli_query($conn, $sql);

//echo "$print";
header("Location: ../watchlater_list.php?delete=success");


{
  //  header("Location: ../deletemovie.php?error=no");

}
