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
    <title>Create Set</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="create_set"> 
        <div id="blur">
            <div>
                <h2>New Set</h2>
                <button id="createSetBtn">Create New Set</button>
            </div>
        </div>

        <div id="popup">
            <div>
                <form action="logic.create_set.php" target="dummyframe" method="post">
                    <h2>Create New Set</h2>
                    <?php if (isset($_GET['error'])) { ?> 
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <h3 for="set_name">Set Name</h3>
                    <br>
                    <input type="text" name="set_name" placeholder="Set Name">
                    <br>
                    <button id="nameSetBtn" href="#">Add cards</button>
                    <button type="submit">Create</button>
                </form>
            </div>
        </div>
    </div>

    <iframe name="dummyframe" id="dummyframe" style="display: none;"></iframe>

    <script src="create_set.js"></script>
    <img src="images/dolphin.jpg" alt="" 
     onload="createSet();this.parentNode.removeChild(this);" />
</body>
</html>
