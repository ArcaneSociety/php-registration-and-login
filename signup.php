<?php
include_once 'header.php';
?>
<link rel="stylesheet" href="./css/signup.css">

<div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Register</h5>
            <form action="includes/signup.inc.php" method="post">
              <div class="form-group">
                <label for="exampleInputEmail1">Full Name</label>
                <input type="text" class="form-control" id="inputName" name="name" placeholder="Enter name">
              </div>
              <div class="form-group">
                <label for="inputName">Email</label>
                <input type="email" class="form-control" id="inputEmail" name="email" aria-describedby="emailHelp" placeholder="Enter email">
              </div>

              <div class="form-group">
                <label for="exampleInputEmail1">Username</label>
                <input type="text" class="form-control" id="inputUname" name="uid" placeholder="Enter username">
              </div>
              <div class="form-group">
                <label for="inputPassword">Password</label>
                <input type="password" class="form-control" name="pwd" id="inputPassword1" placeholder="Password">
              </div>
              <div class="form-group">
                <label for="ReinputPassword1">Confirm Password</label>
                <input type="password" class="form-control" name="pwdrepeat" id="ReinputPassword1" placeholder="Retype Password">
              </div>
           
              <button type="submit" name="submit" class="card-sigin btn btn-lg btn-primary btn-block text-uppercase">Submit</button>
            </form>
            <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"]== "emptyinput") {
            echo "<p style='text-align:center'>Fill in all fields!</p>";
        }
        elseif ($_GET["error"]=="invaliduid") {
            echo "<p style='text-align:center'>Choose proper username</p>";
        }
        elseif ($_GET["error"]=="invalidemail") {
            echo "<p style='text-align:center'>Choose proper email</p>";
        }
        elseif ($_GET["error"]=="passwordsdontmatch") {
            echo "<p style='text-align:center'>Passwords dont match</p>";
        }
        elseif ($_GET["error"]=="stmtfailed") {
            echo "<p style='text-align:center'>Something went wrong! Try again.</p>";
        }
        elseif ($_GET["error"]=="usernametaken") {
            echo "<p style='text-align:center'>Username already exist</p>";
        }
        elseif ($_GET["error"]=="none") {
            echo "<p style='text-align:center'>Successfully signed up</p>";
        }
    }
?>
          </div>
        </div>
      </div>
    </div>
  </div>




