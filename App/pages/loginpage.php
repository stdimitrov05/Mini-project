<?php
error_reporting(E_ALL & ~E_NOTICE);
include('../db/database.php') ?>
<!DOCTYPE html>
<html lang="en">

<head>
          <meta charset="UTF-8">
          <meta http-equiv="X-UA-Compatible" content="IE=edge">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">
          <title>Document</title>
          <style>
                    input[type=text] {
                              width: 25%;
                              padding: 10px 20px;
                              margin: 5px 0;
                              border: 1px solid black;
                    }

                    input[type=submit] {
                              width: 10%;
                              padding: 12px 20px;
                              border: 1px solid #555;
                              background-color: green;
                              color: white;

                    }
          </style>
</head>
<html>

<body>
          <center>

                    <form action="loginpage.php" method="POST">

                              <b>Username:-</b><input type="text" name="name" required=""><br><br>

                              <b>Password:-</b><input type="text" name="password" required=""><br><br>
                              <b>Email:-</b><input type="text" name="email" required=""><br><br>

                              <input type="submit" name="Login" value="Login">

                              <form>
</body>
</center>

</html>