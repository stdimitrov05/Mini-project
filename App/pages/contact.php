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
          <link rel="stylesheet" href="./style/contactStyle.css" type="text/css" media="all" />
          <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
          <h2>Contact Us</h2>
          <div class="navigator-tab">

                    <nav class="navbar navbar-expand-sm ">
                              <!-- Brand/logo -->
                              <a class="navbar-brand" href="#">LOGO</a>
                              <ul class="navbar-nav">
                                        <li class="nav-tabs">
                                                  <a class="nav-link" href="./page.php">Home</a>
                                        </li>
                                        <li class="nav-item">
                                                  <a class="nav-link" href="./Chat/practice.php">Register</a>
                                        </li>
                                        <li class="nav-item">
                                                  <a class="nav-link" href="./UploadFile.php">Upload File</a>
                                        </li>
                                        <li class="nav-item">
                                                  <a class="nav-link" href="./Chat/chatroom.php">Chat</a>
                                        </li>
                                        <li class="nav-item">
                                                  <a class="navigator-text" href="./contact.php">Contact</a>
                                        </li>
                              </ul>
                    </nav>
          </div>
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