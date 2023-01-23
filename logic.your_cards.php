<?php 
session_start();
$email = $_SESSION['email'];
$sql_valid_email = "SELECT * FROM `flash_set` WHERE `email` = '$email';";
$result = mysqli_query($conn, $sql_valid_email);
if (mysqli_num_rows($result) > 0) {
    while ($row=mysqli_fetch_assoc($result)) {
        $id = $row['table_id'];
        $folder_name = $row['set_name'];
        $folder = '<div class="folder-item">'.'<a id="'.$id.' "class="folder" href="#">'.'<i class="fa-regular fa-folder fa-5x"></i>'.$folder_name.'</a>'.'</div>';
        echo $folder;
    }
}
?>