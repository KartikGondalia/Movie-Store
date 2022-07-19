<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'includes/dbh.inc.php';
?>
             <?php        include 'header_admin.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $sql = "select * from users ;";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);
        ?>
        <table border='2'>
        <tr><td>Name</td><td>Email</td></tr>
        
            <?php
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            echo "<td>". $row['name'] ."</td>";
            echo "<td>". $row['email'] ."</td>";
            echo "</tr>";
        }?>
        
        
    </body>
</html>
