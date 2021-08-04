<?php
//creating connection to database
$con = mysqli_connect("localhost", "root", "", "logsystem") or die("error");

//check whether submit button is pressed or not
if ((isset($_POST['submit']))) {
          //fetching and storing the form data in variables
          $Name = $con->real_escape_string($_POST['name']);
          $Email = $con->real_escape_string($_POST['email']);
          $Phone = $con->real_escape_string($_POST['contact']);
          $comments = $con->real_escape_string($_POST['text']);

          //query to insert the variable data into the database
          $sql = "INSERT INTO contactus (name, email, phone, comments) VALUES ('" . $Name . "','" . $Email . "', '" . $Phone . "', '" . $comments . "')";

          //Execute the query and returning a message
          if (!$result = $con->query($sql)) {
                    die('Error occured [' . $conn->error . ']');
          } else
                    echo "Thank you! We will get in touch with you soon";
}

?>

<html>


<head>
          <link rel="stylesheet" href="./style/contact/style.css" type="text/css" media="all" />
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="shortcut icon" type="image/x-icon" sizes="192x192" href="../images/Wep_logo.png">

<title>Web App .v1</title>
</head>

<body class="Page-Background">
          
          <div class="navigator-tab" ">

<nav class=" navbar navbar-expand-sm ">
     <!-- Brand/logo -->
     <a class=" navbar-brand" href="http://localhost/WorkList/App/pages/page.php"><img class="Logo_image" src="../images/Wep_logo.png"></a>
<ul class=" navbar-nav">
     <li class="nav-tabs">
          <a class="navigator-text" href="http://localhost/WorkList/App/pages/page.php"><i class="fa fa-fw fa-home"></i> Back</a>
     </li>
   
   
</ul>
</nav>
          </div>
          <h2>Contact Us</h2>
          <form class="form" action="contact.php" method="POST">

                    <p class="username">
                              <label for="name">What's your name: </label>
                              <input type="text" name="name" id="name" placeholder="Enter your name">

                    </p>

                    <p class="useremail">
                              <label for="email">How is your email: </label>
                              <input type="text" name="email" id="email" placeholder="mail@example.com">

                    </p>

                    <p class="usercontact">
                              <label for="contact">How is your phone number: </label>
                              <input type="text" name="contact" id="contact" placeholder="contact no.">

                    </p>

                    <p class="usertext">
                              <label for="text">Comments</label>
                              <textarea name="text" placeholder="Write something to us"></textarea>

                    </p>

                    <p class="usersubmit">
                              <input type="submit" name="submit" value="Send">
                    </p>
          </form>
</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

</html>