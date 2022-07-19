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
        <?php
        include 'header.php';
        ?>
    <table border="2">
        <?php
        session_start();

        $sql = "select * from movie where genre='Romance';";
        $result = mysqli_query($conn, $sql);
        $result_check = mysqli_num_rows($result);
        while ($row = mysqli_fetch_assoc($result)) {
            echo "<tr>";
            $path3 = $row["img_path"];
            echo"<td>";
            echo "<img src='$path3' height='200' width='200'>";
            echo"</td>";


            echo"<td>";
            $name3 = $row['name'];
            $_SESSION['moviename'] = $name3;
            echo "<a href='movie.php' name='$name3'>" . $row['name'] . "</a>";
            echo"</td>";

            echo "</tr>";
        }
        ?>
    </table>
</body>
</html>
