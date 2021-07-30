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
        $nickname = mysqli_real_escape_string($connect, $_POST['nickname']);
        $email = mysqli_real_escape_string($connect, $_POST['email']);
        $password = mysqli_real_escape_string($connect, $_POST['password']);
        $confirm_password = mysqli_real_escape_string($connect, $_POST['confirm_password']);
        $date = date('Y-m-d H:i:s');


        // by using array_push() corresponding errors in $errors() which is an array of errors.
        if (empty($username)) {
            array_push($errors, "Username is required");
        } else if (empty($nickname)) {
            array_push($errors, "Nickname is required");
        } else if (empty($email)) {
            array_push($errors, "Email is required");
        } else  if (empty($password)) {
            array_push($errors, "Password is required");
        } else  if ($password != $confirm_password) {
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
            $pwd = md5($password); //random code with md5()

            $register = "INSERT INTO clients (nickname,username, email, password,date)
                          VALUES('$nickname','$username', '$email', '$pwd' , '$date')";
            mysqli_query($connect, $register);
            header('Location: infofrom.php');
        }
    }
}
if (isset($_POST['InfoFrom'])) {

    $firstName = mysqli_real_escape_string($connect, $_POST['firstName']);
    $lastName = mysqli_real_escape_string($connect, $_POST['lastName']);
    $age = mysqli_real_escape_string($connect, $_POST['age']);
    $adress = mysqli_real_escape_string($connect, $_POST['adress']);
    $image =  mysqli_real_escape_string($connect, $_POST['image']);


    // by using array_push() corresponding errors in $errors() which is an array of errors.
    if (empty($firstName)) {
        array_push($errors, "FirstName is required");
    } else if (empty($lastName)) {
        array_push($errors, "LastName  is required");
    } else if (empty($age)) {
        array_push($errors, "Age is required");
    } else  if (empty($adress)) {
        array_push($errors, "Adress is required");
    } else if (empty($image)) {
        array_push($errors, "Image is required");
    }
    //
    if (count($errors) == 0) {
        /* INSERT INTO pictures VALUES(1, LOAD_FILE('d:\\flower.gif')); */
        $Info = "INSERT INTO clientinfo  (firstname,lastName, age, adress,image)
                          VALUES('$firstName','$lastName', '$age', '$adress', '$image' )";

        mysqli_query($connect, $Info);
        header('Location:/WorkList/App/pages/page.php');
    }
}
if (isset($_POST['Login'])) {
    $name = mysqli_real_escape_string($connect, $_POST['name']);
    $password = mysqli_real_escape_string($connect, $_POST['password']);
    $email = mysqli_real_escape_string($connect, $_POST['email']);

    if (empty($name)) {
        array_push($errors, "Name is required");
    } else  if (empty($password)) {
        array_push($errors, "Password is required");
    } else if (empty($email)) {
        array_push($errors, "Email is required");
    }

    if (count($errors) == 0) {

        $Login = "Select * from clients where name={$name} and password={$password} and email = {$email}";
        mysqli_query($connect, $Login);
        header('Location: /WorkList/App/pages/page.php');
    }
} else if (isset($_POST['upload'])) { // If isset upload button or not
    // Declaring Variables
    $file_info = mysqli_real_escape_string($connect, $_POST['file_info']);
    $location = "../uploads/";
    $file_new_name = date("dmy") . time() . $_FILES["file"]["name"]; // New and unique name of uploaded file
    $file_name = $_FILES["file"]["name"]; // Get uploaded file name
    $file_temp = $_FILES["file"]["tmp_name"]; // Get uploaded file temp
    $file_size = $_FILES["file"]["size"]; // Get uploaded file size

    if (empty($file_info)) {
        array_push($errors, "File info is required");
    }
    /*
	How we can get mb from bytes
	(mb*1024)*1024

	In my case i'm 10 mb limit
	(10*1024)*1024
	*/

    if ($file_size > 10485760) { // Check file size 10mb or not
        echo "<script>alert('Woops! File is too big. Maximum file size allowed for upload 10 MB.')</script>";
    } else {
        $sql = "INSERT INTO uploaded_files (name, new_name , fileInfo)
				VALUES ('$file_name', '$file_new_name' ,'$file_info')";
        $result = mysqli_query($connect, $sql);
        if ($result) {
            move_uploaded_file($file_temp, $location . $file_new_name);
            ('Wow! File uploaded successfully.');
            header('Location: /WorkList/App/pages/page.php');
            // Select id from database
            $sql = "SELECT id FROM uploaded_files ORDER BY id DESC";
            $result = mysqli_query($connect, $sql);
            if ($row = mysqli_fetch_assoc($result)) {
                $link = $base_url . "download.php?id=" . $row['id'];
                $link_status = "display: block;";
            }
        } else {
            echo "<script>alert('Woops! Something wong went.')</script>";
        }
    }
} 

