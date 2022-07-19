<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<?php 
    require 'includes/dbh.inc.php';
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
            $sql="select * from users;";
            $result= mysqli_query($conn, $sql);
            $result_check= mysqli_num_rows($result);
            
            if($result_check > 0)
            {
                while($row = mysqli_fetch_assoc($result))
                {   
                    echo $row['name'];
                    echo "<br>";
                }
            }
        ?>
    </body>
</html>
