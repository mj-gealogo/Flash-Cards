<?php
include_once 'includes/dbh.php'; 

if (isset($_POST['email_login']) && isset($_POST['password_login'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $email = validate($_POST['email_login']);
    $password = validate($_POST['password_login']);

    if(empty($email)) {
        header("Location: login.php?error=Email is required");
        exit();
    } else if(empty($password)) {
        header("Location: login.php?error=Password is required");
        exit();
    } else {
        $sql_valid_email = "SELECT * FROM `users` WHERE `email` = '$email';";
        $result = mysqli_query($conn, $sql_valid_email);
        if (mysqli_num_rows($result) > 0) {
            while ($row=mysqli_fetch_assoc($result)) {
                if (password_verify($password, $row['password'])) {
                    session_start();
                    $_SESSION['fname']=$row['fname'];
                    $_SESSION['lname']=$row['lname'];
                    $_SESSION['email']=$row['email'];
                    header("Location: main.php");
                    exit();
                }
            }
        }
    }
} else {
    header("Location: login_signup.php");
    exit();
}
?>