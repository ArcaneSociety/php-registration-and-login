<?php
include_once 'header.php';
if (isset($_SESSION["useruid"])) {
    echo "<p>Hello " . $_SESSION["useruid"]."</p>";
    
}
