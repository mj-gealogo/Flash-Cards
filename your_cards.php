<?php
    include_once 'includes/dbh.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Cards</title>
    <link rel="stylesheet" href="main.css">
    <script src="https://kit.fontawesome.com/2afa955442.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="folder-container">
        <?php
            include_once 'logic.your_cards.php';
        ?>
    </div>
    <img src="images/dolphin.jpg" alt="" 
     onload="yourCards();this.parentNode.removeChild(this);" />
</body>
</html>
