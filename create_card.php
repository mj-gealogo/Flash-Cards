<?php
    include_once 'includes/dbh.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Cards</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <section id="addCard" class="create-card-container">
        <div class="create-card-item">
            <form action="logic.create_card.php" method="post">
                <?php if (isset($_GET['error'])) { ?> 
                <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <h3>Question</h3>
                <input class="create-card-input" type="text" name="question" placeholder="Q">
        </div>
        <div class="create-card-item">
            <h3>Answer</h3>
            <input class="create-card-input" type="text" name="answer" placeholder="A">
        </div>
    </section>

    <section>
            <button id="addCardBtn" type="submit">Save</button>
        </form>
    </section>
</body>
</html>
