<?php


    include   'dbh.inc.php';

            $name=$_GET['moviename'];
            $genre=$_GET['genre'];
            $path=$_GET['path'];
            $price=$_GET['price'];
            $ipath=$_GET['ipath'];
            
    $sql ="insert into movie(name,genre,path,price,img_path) values('$name','$genre','$path','$price','$ipath');";        
    mysqli_query($conn, $sql);
     
    header("Location: ../add.php?upload=success");
        
