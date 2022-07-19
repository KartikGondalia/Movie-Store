<?php
session_start();


if(isset($_POST["signup"]))
{
    require 'dbh.inc.php';
    
    $name=$_POST['name'];
    
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password2=$_POST['password2'];
    
    
   
    if(empty($name) || empty($email) || empty($password) || empty($password2) )
    {
        header("Location: ../signup2.php?error=empty&fname=".$name."&mail=".$email);
        exit();
    }
    else if(!filter_var($email, FILTER_VALIDATE_EMAIL))
    {
        header("Location: ../signup2.php?error=mail&fname=".$name."&mail=".$email);
        exit();
    }
    else if($password != $password2)
    {
        header("Location: ../signup2.php?error=pword&fname=".$name."&mail=".$email);
        exit();
    }       
    else
    {
        $sql= "select email from admin where email=?";
        $stmt= mysqli_stmt_init($conn);
        if(!mysqli_stmt_prepare($stmt, $sql))
        {
        header("Location: ../signup2.php?error=sql&fname=".$name."&mail=".$email);
            exit(); 
        } 
        else {
             mysqli_stmt_bind_param($stmt,"s",$email);
             mysqli_stmt_execute($stmt);
             mysqli_stmt_store_result($stmt);
             $resultcheck= mysqli_stmt_num_rows($stmt);
             if($resultcheck>0)
             {
                  header("Location: ../signup2.php?error=user&fname=".$name."&mail=".$email);
                  exit();
             }
             else {
                  $sql="insert into admin (email,password)values(?,?)";
                  $stmt= mysqli_stmt_init($conn);
                   if(!mysqli_stmt_prepare($stmt, $sql))
                    {
                         header("Location: ../signup2.php?error=sql&fname=".$name."&mail=".$email);
                         exit(); 
                    } 
                    else
                    {
                       // $hashpassword = password_hash($password, PASSWORD_DEFAULT);
                        mysqli_stmt_bind_param($stmt,"ss",$email,$password);
                        mysqli_stmt_execute($stmt);
                        $_SESSION['email']=$email;
                        header("Location: ../home_admin.php");
                        exit();
                    }
             }
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($conn); 
}
else
{
    header("Location: ../signup2.php");
    exit();
}