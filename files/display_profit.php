<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php
include 'includes/dbh.inc.php';
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        $sql = "select * from user_paid ;";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);
        $profit=0;
        ?>
        

            <?php
            while ($row = mysqli_fetch_assoc($result)) {
                            $name2= $row['movie_name'] ;

                $sql2= "select * from movie where name='$name2';";
                $result2 = mysqli_query($conn, $sql2);
        $result_check2 = mysqli_num_rows($result2);
      while(  $row2 = mysqli_fetch_assoc($result2)){
              //  echo "<td>" . $row['name'] . "</td>";
                $profit= $profit + $row2['price'];
                /*echo "<td>" . $row['genre'] . "</td>";

                echo "<td>" . $row['path'] . "</td>";
                echo "<td>" . $row['price'] . "</td>";
      echo "</tr>";*/}
            }
            echo $profit;
            ?>


    </body>
</html>
