<?php
include_once 'header.php';
if (isset($_SESSION["useruid"])) {
    echo "<p>Hello " . $_SESSION["useruid"]."</p>";
    
}?>
<link rel="stylesheet" href="css/main.css">
<div style="background: url(https://psmarketingimages.s3.amazonaws.com/blog/wp-content/uploads/2018/02/16120446/hand-putting-coins-in-glass-jar-for-giving-and-donation-concept-picture-id813128966.jpg)" class="jumbotron bg-cover text-white">
    <div class="container py-5 text-center">
        <h1 class="display-2 font-weight-bold">CareClub</h1>
        <h1 class="display-5 ">Charity is the root of all good works</h1>
        </p>
        <a href="#" role="button" class="btn btn-success btn-lg">Be a Donor</a>
        <a href="#" role="button" class="btn btn-info btn-lg">Be a NGO</a>
    </div>
</div>