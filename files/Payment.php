
<?php include("header.php"); ?>

<?php
//include "header.php";
session_start();
if (isset($_SESSION['email'])) {
    include "header.php";
    echo "<html>";
    $price=$_SESSION['price'];
    echo " <body>";
    echo "<a href='includes/logout.inc.php'><input type='button' value='SingOut'/> </a>";
    
    echo "You have to pay $price<br>";
    echo "<form action='user_pay.php' method='post'>";
    echo "Card No<input type='text' name='cardno'/><br>";
    echo "CVC No<input type='text' name='cvc'/><br>";
    echo "<input type='submit' value='Pay'>";
    echo "</form>";
    //require 'footer.php';
    echo "</body>";
    echo "</html>";
} else {

    echo "you need to log in first<br>";
    echo "<a href='index.php'><h1>Click Here</h1></a>";
}
?>  
</body>

</html>
