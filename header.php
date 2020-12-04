<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Site</title>
</head>
<body>
    <header>
        <ul>
            <li>Home</li>
            <li>About</li>
            <li>Blog</li>
            <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='profile.php'>Your profile</a></li>";
                    echo "<li><a href='includes/logout.inc.php'>Log out</a></li>";
                }
                else{
                    echo "<li> <a href='signup.php'>Sign up</a></li>";
                    echo "<li> <a href='login.php'>Login</a></li>";
                }
            ?>
        </ul>
    </header>
</body>
</html>