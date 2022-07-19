


<?php
//include "header.php";
session_start();
if (isset($_SESSION['email'])) {
    echo "<html>";

    echo " <body background img='photoes/home.png'>";

    echo "<a href='includes/logout.inc.php'><input type='button' value='SingOut'/> </a>";
    echo "<br>";

    echo "<a href='movie.php?name=AVENGERS4'>AVENGERS4</a>";
    echo "<br>";

    echo "<a href='movie.php?name=Cars2'>Cars 2</a>";
    echo "<br>";
    
    echo "<a href='movie.php?name=DARK_PHOENIX'>DARK PHOENIX </a>";
    echo "<br>";
     

    echo "</body >";
    echo "</html>";
} else {

    echo "you need to log in first<br>";
    echo "<a href='index.php'><h1>Click Here</h1></a>";
}
?>  
</body>

</html>
