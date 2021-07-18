<?php
error_reporting(E_ALL & ~E_NOTICE);
include('../db/database.php') ?>
<!DOCTYPE html>
<html>

<head>
          <title>Sing Up</title>
          <link rel="stylesheet" type="text/css" href="../style/global.scss">
          <!-- Bootstrap 4  style -->
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
          <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
          <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
          <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
          <!-- Icons -->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
</head>

<body>

          <form method="POST" action="register.php" class="needs-validation " novalidate>
                    <?php include('../errors/error.php'); ?>
                    <h1>Sing Up</h1>
                    <br>
                    <div class="form-group">
                              <label>What username do you want to have ? </label>
                              <br>
                              <input class="input-text" type="text" name="username" placeholder="User Name" required="required">
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                              <label>Nickname</label>
                              <input type="text" name="nickname" placeholder="Nick Name" required="required">
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                              <label>Email</label>
                              <input type="email" name="email" placeholder="Email" required="required">
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                              <label>Password</label>
                              <input type="password" name="password" required="required" placeholder="Password">
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                              <label>Confirm password</label>
                              <input type="password" name="confirm_password" placeholder="Confirm Password" required="required">
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group">
                              <label>Today Date :</label>
                              <input type="date" name="date" placeholder="date" required="required">
                              <div class="valid-feedback">Valid.</div>
                              <div class="invalid-feedback">Please fill out this field.</div>
                    </div>
                    <div class="form-group form-check">
                              <label class="form-check-label">
                                        <input class="form-check-input" type="checkbox" name="remember" required> I agree on blabla.
                                        <div class="valid-feedback">Valid.</div>
                                        <div class="invalid-feedback">Check this checkbox to continue.</div>
                              </label>
                    </div>
                    <button type="submit" class="btn btn-primary" name="registerNewUser">Login</button>
          </form>


</body>
<script>
          (function() {
                    'use strict';
                    window.addEventListener('load', function() {
                              // Get the forms we want to add validation styles to
                              var forms = document.getElementsByClassName('needs-validation');
                              // Loop over them and prevent submission
                              var validation = Array.prototype.filter.call(forms, function(form) {
                                        form.addEventListener('submit', function(event) {
                                                  if (form.checkValidity() === false) {
                                                            event.preventDefault();
                                                            event.stopPropagation();
                                                  }
                                                  form.classList.add('was-validated');
                                        }, false);
                              });
                    }, false);
          })();
</script>

</html>