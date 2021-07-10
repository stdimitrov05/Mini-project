<?php
error_reporting(E_ALL & ~E_NOTICE);
include('database.php') ?>
<!DOCTYPE html>
<html>

<head>
          <title>Registration system </title>
          <link rel="stylesheet" type="text/css" href="./styles/global.scss">
</head>

<body>
          <div class="header">
                    <h2>Sign Up</h2>
          </div>

          <form method="post" action="infofrom.php">
                    <?php include('error.php'); ?>
                    
                    <div class="input-group">
                              <label>Fistname</label>
                              <input type="text" name="firstName" placeholder="Your FirstName" required="required">
                    </div>
                    <div class="input-group">
                              <label>LastName</label>
                              <input type="text" name="lastName" placeholder="Your LastName" required="required">
                    </div>
                    <div class="input-group">
                              <label>Age</label>
                              <input type="number" name="age" placeholder="Your Age" required="required">
                    </div>
                    <div class="input-group">
                              <label>Adress</label>
                              <input type="text" name="adress" required="required" placeholder="Your Adress">
                    </div>

                    <div class="input-group">
                              <button type="submit" class="btn" name="InfoFrom">Register</button>
                    </div>
                    <div>
                              Already have an account?
                              <a class="right" href="loginpage.php">Login</a>
                    </div>
          </form>
</body>

</html>