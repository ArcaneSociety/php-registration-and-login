<?php
include_once 'header.php';
?>
<link rel="stylesheet" href="./css/login.css">
  <div class="container">
    <div class="row">
      <div class="col-sm-9 col-md-7 col-lg-5 mx-auto">
        <div class="card card-signin my-5">
          <div class="card-body">
            <h5 class="card-title text-center">Sign In</h5>
            <form class="form-signin" action="includes/login.inc.php" method="POST">
              <div class="form-label-group">
                <input type="text" class="form-control" id="inputEmail" name="uid" placeholder="Username/Email">
                <label for="inputEmail">Email address</label>
              </div>

              <div class="form-label-group">
                <input type="password" id="inputPassword" name="pwd" class="form-control" placeholder="Password">
                <label for="inputPassword">Password</label>
              </div>
              <button class="btn btn-lg btn-primary btn-block text-uppercase" name="submit" type="submit">Sign in</button>
            </form>
            <?php
    if (isset($_GET["error"])) {
        if ($_GET["error"]== "emptyinput") {
            echo "<p style='text-align: center;'>Fill in all fields!</p>";
        }
        elseif ($_GET["error"]=="wronglogin") {
            echo "<p style='text-align: center;'>Incorrect credentials</p>";
        }
    }
?>
          </div>
        </div>
      </div>
    </div>
  </div>

