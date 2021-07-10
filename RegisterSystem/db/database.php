<?php
error_reporting(E_ALL & ~E_NOTICE);
$host = 'localhost';
$username = 'root';
$password = '';
$db_name = 'logsystem';
$errors = array();
$connect = mysqli_connect($host, $username, $password, $db_name);

if ($connect) {
    if (isset($_POST['registerNewUser'])) {
        // receive all input values from the register.php form
        $username = mysqli_real_escape_string($connect, $_POST['username']);
        $nickname = mysqli_real_escape_string($connect, $_POST['username']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($connect, $_POST['confirm_password']);
        $date = date('Y-m-d H:i:s'); 
    

        // by using array_push() corresponding errors in $errors() which is an array of errors.
        if (empty($username)) {
            array_push($errors, "Username is required");
        }
        else if
        (empty($nickname)) {
            array_push($errors, "Nickname is required");
        }
      else if (empty($email)) {
            array_push($errors, "Email is required");
        }
      else  if (empty($password)) {
            array_push($errors, "Password is required");
        }
     else  if ($password != $confirm_password) {
            array_push($errors, "Failed to Match");
        }
        //fistly check in database that a user does not already exist with the same username and/or email.
        $get_all = "SELECT * FROM clients WHERE username='$username' OR email='$email' LIMIT 1";
        $result = mysqli_query($connect, $get_all);
        $user = mysqli_fetch_assoc($result);

        if ($user) { // if user exists
            if ($user['username'] === $username) {
                array_push($errors, "Username is already existed");
            }

            if ($user['email'] === $email) {
                array_push($errors, "email is already existed");
            }
        }

        // Finally, register user if no error
        if (count($errors) == 0) {
            $pwd = $password; //random code with md5()

            $register = "INSERT INTO clients (nickname,username, email, password,date)
                          VALUES('$nickname','$username', '$email', '$pwd' , '$date')";
            mysqli_query($connect, $register);
            header('Location: infofrom.php');
        }
        
        }
    }
    if (isset($_POST['InfoFrom'])) {
        // receive all input values from the register.php form
        $firstName = mysqli_real_escape_string($connect, $_POST['firstName']);
        $lastName = mysqli_real_escape_string($connect, $_POST['lastName']);
        $age = mysqli_real_escape_string($connect, $_POST['age']);
        $adress = mysqli_real_escape_string($connect, $_POST['adress']);

        // by using array_push() corresponding errors in $errors() which is an array of errors.
        if (empty($firstName)) {
            array_push($errors, "FirstName is required");
        } else if (empty($lastName)) {
            array_push($errors, "LastName  is required");
        } else if (empty($age)) {
            array_push($errors, "Age is required");
        } else  if (empty($adress)) {
            array_push($errors, "Adress is required");
        }
//
        if (count($errors) == 0) {

            $Info = "INSERT INTO clientinfo  (firstname,lastName, age, adress)
                          VALUES('$firstName','$lastName', '$age', '$adress' )";
            mysqli_query($connect, $Info);
            header('Location: pages/page.php');
        }
      
}
