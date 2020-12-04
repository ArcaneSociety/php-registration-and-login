<?php
include_once 'header.php';
?>
<section class='signup'>
    <h2>signup</h2>
    <form action="includes/signup.inc.php" method="post">
        <input type="text" name="name" placeholder="Full Name">
        <input type="text" name="email" placeholder="email">
        <input type="text" name="uid" placeholder="username">
        <input type="password" name="pwd" placeholder="Password">
        <input type="password" name="pwdrepeat" placeholder="Re-Enter Password">
        <button type="submit" name="submit">Sign Up</button>
    </form>
    <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"]== "emptyinput") {
            echo "<p>Fill in all fields!</p>";
        }
        elseif ($_GET["error"]=="invaliduid") {
            echo "<p>Choose proper username</p>";
        }
        elseif ($_GET["error"]=="invalidemail") {
            echo "<p>Choose proper email</p>";
        }
        elseif ($_GET["error"]=="passwordsdontmatch") {
            echo "<p>Passwords dont match</p>";
        }
        elseif ($_GET["error"]=="stmtfailed") {
            echo "<p>Something went wrong! Try again.</p>";
        }
        elseif ($_GET["error"]=="usernametaken") {
            echo "<p>Username already exist</p>";
        }
        elseif ($_GET["error"]=="none") {
            echo "<p>Successfully signed up</p>";
        }
    }
?>
</section>


