<html>
    <head>
        
             <?php        include 'header_admin.php';
?>
        <form action="includes/delete.inc.php"method="GET">
            moviename<input type="text" name='moviename'>
            <input type='submit' name='delete' value='delete'>
        </form>
        
        <?php
        $fullurl= "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        
        if(strpos($fullurl, "delete=success") == true)
        {
            echo "movie deleted successfully";
        }
        elseif(strpos($fullurl, "error=no") == true)
        {
            echo "no such movie exists";
        }
        ?>
    </body>
</html>

