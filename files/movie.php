<?php

session_start();
if (isset($_SESSION['email'])) {
    require 'header.php';
    require 'includes/dbh.inc.php';
    echo "<html>";

    echo " <body>";
    $movieName = $_GET['name'];
    $email = $_SESSION['email'];
    $sql = "select * from movie where name='$movieName';";
 //   $price = "select price from movie where name='$movieName';";
  //  $_SESSION['$movieName'];
    
    $result = mysqli_query($conn, $sql);
    $result_check = mysqli_num_rows($result);
    $row = mysqli_fetch_assoc($result);
    $path1 = $row['path'];
    $price=$row['price'];
    $_SESSION['movieName']=$movieName;
           $_SESSION['price']=$price;

    if ($result_check > 0) {
        //echo "$price";
        if ($price == 0) {
            echo "<video width='320' height='240' autoplay controls>";
            echo "<source src='$path1' type='video/mp4'>";
            echo "Your browser does not support the video tag.";
            echo "</video>";
            echo "<a href='includes/logout.inc.php'><input type='button' value='SingOut'/> </a>";

            require 'footer.php';
            echo "</body>";
            echo "</html>";
        } else {
            $sql2 = "select * from user_paid ;";
            $result2 = mysqli_query($conn, $sql2);
            $result_check2 = mysqli_num_rows($result2);
            $nk=0;
            if ($result_check2 > 0) {
               while( $row2 = mysqli_fetch_assoc($result2))
               {
                if ($row2['email'] == $email && $row2['movie_name'] == $movieName && $nk==0) {
                    $nk=1;
                    echo "<video width='700' height='700' autoplay controls>";
                    echo "<source src='$path1' type='video/mp4'>";
                    echo "Your browser does not support the video tag.";
                    echo "</video>";
                    echo "<br><a href='home'>Home Page</a>";
                    echo "<br><a href='includes/logout.inc.php'><input type='button' value='SingOut'/> </a>";
                    echo "<br><a href='home'>Home Page</a>";


                    require 'footer.php';
                    echo "</body>";
                    echo "</html>";
                    break;
                  }
               }
            } else {
                echo "You need to pay $price for this $movieName<br>";
                echo "click here to pay $price";
                echo "<a href='Payment.php'>Pay</a>";
            }
            if($nk==0)
            {
                echo "You need to pay $price for this $movieName<br>";
                echo "click here to pay $price";
                echo "<a href='Payment.php'>Pay</a>";
            }
        }
    }
} else {

    echo "you need to log in first";
    echo "<a href='index.php'><h1>Click Here</h1></a>";
}
?>







