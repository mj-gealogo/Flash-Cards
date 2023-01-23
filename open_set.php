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
    <?php 
        class Card {
            public $question;
            public $answer;

            public function __construct($question, $answer) {
                $this->question = $question;
                $this->answer = $answer;
            }

            function set_question($question) {
                $this->question = $question;
            }

            function set_answer($answer) {
                $this->answer = $answer;
            }

            function get_question() {
                return $this->question;
            }

            function get_answer() {
                return $this->answer;
            }
        }

        $email = $_SESSION['email'];
        $table_id = $_COOKIE['table_id'];
        // echo $table_id;
        $sql_cards = "SELECT * FROM `flash_card` WHERE `email` = '$email' and `table_id` = '$table_id';";
        $result = mysqli_query($conn, $sql_cards);
        $card_array = array();

        if (mysqli_num_rows($result) > 0) {
            $counter = 0;
            while ($row=mysqli_fetch_assoc($result)) {
                $question = $row['question'];
                $answer = $row['answer'];
                $card = new Card($question, $answer);
                array_push($card_array, $card);
            }
            setcookie("card_array", json_encode($card_array), time() + (86400), "/");
        } else {
            setcookie("card_array", json_encode($card_array), time() + (86400), "/");
        }
    ?>

    <section class="flip-card-container">
        <div class="flip-card">
            <div class="flip-card-inner">
                <div class="flip-card-front">
                    <h1 id="flip-card-front">Front</h1>
                </div>

                <div class="flip-card-back">
                    <h1 id="flip-card-back">Back</h1>
                </div>
            </div>
        </div>

        <div>
            <a id="prevBtn" href='#'>Prev</a>
            <a id="nextBtn" href='#'>Next</a>
        </div>
    </section>

    <img src="images/dolphin.jpg" alt="" 
     onload="openSet();this.parentNode.removeChild(this);" />
    <script src="https://kit.fontawesome.com/2afa955442.js" crossorigin="anonymous"></script>
</body>
</html>
