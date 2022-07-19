<?php

if (isset($_POST['delete'])) {
    require 'dbh.inc.php';

    $email = $_POST['email'];
    $password = $_POST['password'];

    if (empty($email) && empty($password)) {
        header("Location: ../delete_account.php?error=empty");
        exit();
    } else if (empty($email)) {
        header("Location: ../delete_account.php?error=empty");
        exit();
    } else if (empty($password)) {
        header("Location: ../delete_account.php?error=empty");
        exit();
    } else {
        $sql = "select * from users where email=? and password=?;";
        $stmt = mysqli_stmt_init($conn);
        if (!mysqli_stmt_prepare($stmt, $sql)) {
            header("Location: ../delete_account.php?error=empty");
            exit();
        } else {
            mysqli_stmt_bind_param($stmt, "ss", $email, $password);
            mysqli_stmt_execute($stmt);
            $result = mysqli_stmt_get_result($stmt);

            if ($row = mysqli_fetch_assoc($result)) {
                // $pwdCheck= password_verify($password,$row['password']);
                $passw = $row['password'];
                if ($passw != $password) {
                    header("Location: ../delete_account.php?error=empty");
                    exit();
                } elseif ($passw == $password) {
                    session_start();
                    // $_SESSION['email'] = $row['email'];
                    $sql = "DELETE FROM users WHERE email='$email';";
                    $print = mysqli_query($conn, $sql);
                    header("Location: ../signup.php?login=success");
                    exit();
                } else {
                    header("Location: ../delete_account.php?error=empty");
                    exit();
                }
            } else {
                header("Location: ../delete_account.php?error=empty");
                exit();
            }
        }
    }
} else {
    header("Location: ../index.php");
    exit();
}