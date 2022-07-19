<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form method="GET" action="includes/upload.inc.php">
            Movie Name <input type="text" name='moviename'><br>
            Genre<input type="text" name='genre'><br>
            Path <input type="text" name='path'><br>
             Price <input type="text" name='price'><br>
            <input type="submit" name='upload' value="Upload">
        </form>
        <a href='includes/logout2.inc.php'><input type='button' value='SingOut'/> </a>

    </body>
</html>
