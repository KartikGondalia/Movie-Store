<?php
session_start();

include 'dbh.inc.php';

$email = $_SESSION['email'];
$movie_name = $_SESSION['movieName'];


$sql = "insert into user_paid(email,movie_name) values('$email','$movie_name');";
mysqli_query($conn, $sql);

echo "Payment done";
echo "<a href='home.php'>Click here </a>";
?>