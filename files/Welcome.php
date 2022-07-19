<?php

session_start();
if (isset($_SESSION['email'])) {

    echo "<html>";

    echo " <body>";
    echo "welcome to our website";
    echo "<a href='includes/logout.inc.php'><input type='button' value='SingOut'/> </a>";

    echo "<a href='home.php'>Click to continue</a>";
    echo "</body>";
    echo "</html>";
} else {

    echo "you need to Sign up first";
    echo '<a href="signup.php">Sign Up</a>';
}
?>

