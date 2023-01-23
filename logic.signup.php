<?php 
include_once 'includes/dbh.php'; 

if (isset($_POST['fname_signup']) && isset($_POST['lname_signup']) &&
isset($_POST['email_signup']) && isset($_POST['password_signup'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    
    $fname = validate($_POST['fname_signup']);
    $lname = validate($_POST['lname_signup']);
    $email = validate($_POST['email_signup']);
    $password = validate($_POST['password_signup']);

    if (empty($fname)) {
        header("Location: signup.php?error=First Name is required");
        exit();
    } else if(empty($lname)) {
        header("Location: signup.php?error=Last Name is required");
        exit();
    } else if(empty($email)) {
        header("Location: signup.php?error=Email is required");
        exit();
    } else if(empty($lname)) {
        header("Location: signup.php?error=Password is required");
        exit();
    } else {
        $password_hash=password_hash($password, PASSWORD_BCRYPT);
        $sql = "INSERT INTO `users`(`fname`, `lname`, `email`, `password`) VALUES ('$fname', '$lname', '$email','$password_hash');";
        mysqli_query($conn, $sql);
        header("Location: login.php");
    }
} else {
    header("Location: login_signup.php");
    exit();
}
?>