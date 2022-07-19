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
        <form method="GET" action="includes/delete_user_admin.inc.php">
            email <input type="text" name="email">
            <input type="submit" name="delete" value="delete user">
        </form>
    <?php
        $fullurl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
        if(strpos($fullurl, "delete=success") == true)
        {
            echo "user deleted successfully";
        }
        elseif(strpos($fullurl, "error=no") == true)
        {
            echo "no such user exists";
        }
        ?>
    </body>
</html>
