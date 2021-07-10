<?php
error_reporting(E_ALL & ~E_NOTICE);
include('database.php') ?>
<!DOCTYPE html>
<html>

<head>
          <title>Registration system </title>
          <link rel="stylesheet" type="text/css" href="./style/global.scss">
</head>

<body>
          <div class="header">
                    <h2>Sign Up</h2>
          </div>

          <form method="post" action="register.php">
                    <?php include('error.php'); ?>
                    <div class="input-group">
                              <label>Username</label>
                              <input type="text" name="username" placeholder="User Name" required="required">
                    </div>
                    <div class="input-group">
                              <label>Nickname</label>
                              <input type="text" name="nickname" placeholder="Nick Name" required="required">
                    </div>
                    <div class="input-group">
                              <label>Email</label>
                              <input type="email" name="email" placeholder="Email" required="required">
                    </div>
                    <div class="input-group">
                              <label>Password</label>
                              <input type="password" name="password" required="required" placeholder="Password">
                    </div>
                    <div class="input-group">
                              <label>Confirm password</label>
                              <input type="password" name="confirm_password" placeholder="Confirm Password" required="required">
                    </div>
                    <div class="input-group">
                              <label>Today Date :</label>
                              <input type="date" name="date" placeholder="date" required="required">
                    </div>
                    <div class="input-group">
                              <button type="submit" class="btn" name="registerNewUser">Register</button>
                    </div>
                    <div>
                              Already have an account?
                              <a class="right" href="loginpage.php">Login</a>
                    </div>
          </form>
</body>

</html>