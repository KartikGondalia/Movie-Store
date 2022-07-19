<?php


    include   'dbh.inc.php';
            session_start();

            $name=$_SESSION['movieName'];
            $email=$_SESSION['email'];
            echo $name;
            echo $email;
    $sql ="insert into watchlater(moviename,email) values('$name','$email');";        
    mysqli_query($conn, $sql);
    
    header("Location: ../movie.php?upload=success");