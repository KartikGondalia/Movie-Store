<?php

if (isset($_POST['signin'])) {
    require 'dbh.inc.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) && empty($password)) {
        header("Location: ../admin_login.php?error=empty");
        exit();
    } else if (empty($email)) {
        header("Location: ../admin_login.php?error=email");
        exit();
    } else if (empty($password)) {
        header("Location: ../admin_login.php?error=pword");
        exit();
    } else {
        $sql = "select * from admin where email=? and password=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../admin_login.php?error=sqlconnection");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                
                $passw = $row['password'];
                if ($passw != $password) {
                    header("Location: ../admin_login.php?error=wp");
                    exit();
                } elseif ($passw == $password) {
                    session_start();
                    $_SESSION['email'] = $row['email'];

                    header("Location: ../details.php?login=success");
                    exit();
                } else {
                    header("Location: ../admin_login.php?error=mysql?fname=" . $row['password']);
                    exit();
                }
            } else {
                header("Location: ../admin_login.php?error=nouser");
                exit();
            }
        }
    }
} else {
    header("Location: ../admin_login.php");
    exit();
}