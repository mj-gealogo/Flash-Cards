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
    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
</head>
<body>

    <header>
        <h1>Flash Cards</h1>
    </header>

    <div id='main'>
        <div class="welcome-container">
            <h1 id="welcome">Start learning and creating today</h1>
        </div>
    </div>

    <div class="sidebar">
        <a id="home" href='#' class="sidenav">Home</a>
        <a id="create" href='#' class="sidenav">Create cards</a>
        <a id="cards" href="#" class="sidenav">Your cards</a>
        <a id="account" href='#' class="sidenav">Account</a>
    </div>


    <script src="main.js"></script>
    <script src="https://kit.fontawesome.com/2afa955442.js" crossorigin="anonymous"></script>
    <script src="test.js"></script>
    <script src="your_cards.js"></script>
    <script src="open_set.js"></script>
    <script src="create_set.js"></script>
    <script src="create_card.js"></script>
</body>
</html>
