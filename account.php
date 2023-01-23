<?php
    include_once 'includes/dbh.php';
    session_start();

?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Flash Cards</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <section class="account">
        <div class="account-first-half">
            <h1>My Acccount</h1>
            <img  id="account-img" src="images/sand.jpg" alt="">
            <form action="logic.logout.php">
            <input type="submit" value="Logout" />
            </form>
        </div>
        <div class="account-second-half">
            <h2 class="">First Name: <?php echo $_SESSION['fname']?></h2>
            <h2 class="">Last Name: <?php echo $_SESSION['lname']?></h2>
            <h2 class="">Email: <?php echo $_SESSION['email']?></h2>
        </div>
    </section>


</body>
</html>

