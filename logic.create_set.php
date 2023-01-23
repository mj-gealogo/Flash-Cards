<?php
session_start();
include_once 'includes/dbh.php'; 

if (isset($_POST['set_name'])) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $set_name = validate($_POST['set_name']);

    if(empty($set_name)) {
        header("Location: create_set.php?error=Set name is required");
        exit();
    } else {
        $email = $_SESSION['email'];
        $sql_max_id = "SELECT MAX(`table_id`) FROM `flash_set` WHERE `email` = '$email';";
        $result_id = mysqli_query($conn, $sql_max_id);
        if (mysqli_num_rows($result_id) == 0) {
            $table_id = 1;
        } else {
            while ($row=mysqli_fetch_array($result_id)) {
                $table_id = $row[0] + 1;
            }
        }
        $sql_create_set = "INSERT INTO `flash_set`(`table_id`,`set_name`, `email`) VALUES ('$table_id', '$set_name', '$email');";
        mysqli_query($conn, $sql_create_set);
    }
}
?>