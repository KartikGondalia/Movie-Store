<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
             <?php        include 'header_admin.php';
?>
        <form action="includes/update_genre.inc.php" method="get">
            moviename<input type="text" name='moviename'><br>
            new genre <input type="text" name='genre'><br>
                        <input type='submit' name='update' value='update'>

        </form>
        
        <?php
        $fullurl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
        if(strpos($fullurl, "update=success") == true)
        {
            echo "movie updated successfully";
        }
        elseif(strpos($fullurl, "error=no") == true)
        {
            echo "no such movie exists";
        }
        ?>
    </body>
</html>
