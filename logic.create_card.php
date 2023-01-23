<?php
session_start();
include_once 'includes/dbh.php'; 

if (isset($_POST['question']) && $_POST['answer']) {
    function validate($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $question = validate($_POST['question']);
    $answer = validate($_POST['answer']); 

    if(empty($question)) {
        header("Location: create_card.php?error=Question is required");
        exit();
    } else if(empty($answer)) {
        header("Location: create_card.php?error=Answer is required");
        exit();
    } else {
        $email = $_SESSION['email'];
        $sql_max_id = "SELECT MAX(`table_id`) FROM `flash_set` WHERE `email` = '$email';";
        $result_id = mysqli_query($conn, $sql_max_id);
        while ($row=mysqli_fetch_array($result_id)) {
            $table_id = $row[0];
        }
        $sql_create_card = "INSERT INTO `flash_card`(`table_id`, `email`, `question`, `answer`) VALUES ('$table_id', '$email', '$question', '$answer');";
        mysqli_query($conn, $sql_create_card);
    }
} else {
    exit();
}
?>