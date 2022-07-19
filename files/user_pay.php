<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'includes/dbh.inc.php';
session_start();
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        if (isset($_SESSION['email'])) {
            $email = $_SESSION['email'];
            $movie_name = $_SESSION['movieName'];


            $sql = "insert into user_paid(email,movie_name) values('$email','$movie_name');";
            mysqli_query($conn, $sql);

            echo "Payment done";
            echo "<a href='home.php'>Click here To Watch Movie</a>";
            echo "<a href='includes/logout.inc.php'><input type='button' value='SingOut'/> </a>";
        } else {

            echo "you need to log in first<br>";
            echo "<a href='index.php'><h1>Click Here</h1></a>";
        }
        ?>
    </body>
</html>
