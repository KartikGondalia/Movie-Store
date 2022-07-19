<?php

include 'dbh.inc.php';

$email = $_GET['email'];

$sql = "DELETE FROM users WHERE email='$email';";
$print=mysqli_query($conn, $sql);

//echo "$print";
header("Location: ../delete_user_admin.php?delete=success");


{
  //  header("Location: ../deletemovie.php?error=no");

}
