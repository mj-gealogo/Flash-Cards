<?php
    include_once 'includes/dbh.php';
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign up to flash cards</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300&family=Merriweather:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="main.css">
</head>
<body>
    <div class="login">
        <div class="login-first-half">
            <div class="login-signup-header">
                <h1>Begin your journey</h1>
                <h2>Get immersed in the productivity in creating flash cards</h2>
            </div>
        </div>

        <div class="login-second-half">
        <div class="card">
                <form action="logic.signup.php" method="post">
                    <h2>Sign up</h2>
                    <?php if (isset($_GET['error'])) { ?> 
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <label for="fname">First Name</label>
                    <input class="pad-top-10px" type="text" name="fname_signup" placeholder="e.g Michael">      
                    <br>  
                    <label for="lname">Last Name</label>
                    <input class="pad-top-10px" type="text" name="lname_signup" placeholder="e.g Gealogo"> 
                    <br>
                    <label for="email">Email</label>
                    <input class="pad-top-10px" type="email" name="email_signup" placeholder="e.g mj.gealogo@gmail.com">
                    <br>
                    <label for="password">Password</label>
                    <input class="pad-top-10px" type="password" name="password_signup" placeholder="terriblePassword$">
                    <br>
                    <button class="pad-top-10px" type="submit">Sign up</button>
                </form>
            </div>

            <div class="card">
                <form action="logic.login.php" method="post">
                    <h2>Login</h2>
                    <?php if (isset($_GET['error'])) { ?> 
                        <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>
                    <label for="email">Email</label>
                    <input class="pad-top-10px" type="email" name="email_login" placeholder="Email">
                    <br>
                    <label for="password">Password</label>
                    <input class="pad-top-10px" type="password" name="password_login" placeholder="Password">
                    <br>
                    <button class="pad-top-10px" type="submit">Login</button>
                </form>
            </div>
        </div>
    </div>

</body>
</html>
