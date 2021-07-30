<?php
$name     = $_POST['name'];
$email    = $_POST['email'];
$country  = $_POST['country'];
$password = md5($_POST['pass1']);

include_once('config.php');
$result = mysqli_query($conn, "INSERT INTO `logsystem`.`user`
            (`user_id`,
             `user_name`,
             `user_email`,
             `user_password`,
             `user_country`,
             `user_status`)
VALUES (NULL,
        '$name',
        '$email',
        '$password',
        '$country',
        '0');");
if ($result) {
    header('location: practice.php?registeration_successfull=<span style="color:green">You have successfully registered. You can now login.</span>');
} else {
    echo "failed";
}
