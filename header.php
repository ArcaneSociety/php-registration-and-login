<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="css/landing.css">
    <title>My Site</title>
</head>
<body>
<ul>
  <li><a href="/mywebsite">Home</a></li>
  <?php
                if (isset($_SESSION["useruid"])) {
                    echo "<li><a href='profile.php'>Your profile</a></li>";
                    echo "<li style='float:right'><a href='includes/logout.inc.php'>Log out</a></li>";
                }
                else{
                    echo "<li style='float:right'> <a href='signup.php'>Sign up</a></li>";
                    echo "<li  style='float:right'> <a href='login.php'>Login</a></li>";
                }
    ?>
</ul>





</body>
</html>