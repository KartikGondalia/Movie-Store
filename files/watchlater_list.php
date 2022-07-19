<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'includes/dbh.inc.php';
?>
<?php
        include 'header.php';
        session_start();

        ?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
         <?php
         $email=$_SESSION['email'];
        $sql = "select * from watchlater where email='$email' ;";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);
        ?>
        <table border='2'>
        <tr><td>Name</td>
        
            <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>". $row['moviename'] ."</td>";
            $_SESSION['mname']=$row['moviename'];
            echo "<td> <a href='deletewatchlater.php'> remove</a>";
            echo "</tr>";
        }?>
    </body>
</html>
