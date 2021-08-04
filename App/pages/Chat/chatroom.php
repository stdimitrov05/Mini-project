<?php
session_start();
?>
<script>
	function getText() {

		var $a = document.getElementById('text').value;

		xhr = new XMLHttpRequest();
		xhr.open('POST', 'chatdb.php', true);
		xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
		xhr.send('chat=' + $a);
		xhr.onreadystatechange = function() {
			if (xhr.responseText) {
				//	document.getElementById('chatarea').innerHTML=xhr.responseText;
			}
		}
	}


	function setText() {

		xhr = new XMLHttpRequest();
		xhr.open('POST', 'chatFetch.php', true);
		xhr.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
		xhr.send();
		xhr.onreadystatechange = function() {
			//	alert(xhr.responseText);
			document.getElementById('chatarea').innerHTML = xhr.responseText;
		}

	}
	setInterval("setText()", 2000);


	setInterval("users()", 3000);


	function users() {
		xhr1 = new XMLHttpRequest();
		xhr1.open('POST', 'userFetch.php', true);
		xhr1.setRequestHeader('content-type', 'application/x-www-form-urlencoded');
		xhr1.send();
		xhr1.onreadystatechange = function() {
			//	alert(xhr.responseText);
			document.getElementById('loginperson').innerHTML = xhr1.responseText;
		}


	}
</script>
<div class="navigator-tab" ">

<nav class=" navbar navbar-expand-sm ">
     <!-- Brand/logo -->
     <a class=" navbar-brand" href="http://localhost/WorkList/App/pages/page.php"><img class="Logo_image" src="../../images/Wep_logo.png"></a>
<ul class=" navbar-nav">
     <li class="nav-tabs">
          <a class="navigator-text" href="http://localhost/WorkList/App/pages/page.php"><i class="fa fa-fw fa-home"></i> Back</a>
     </li>
   
   
</ul>
</nav>
          </div>
<?php

include_once('config.php');
//	echo		$_SESSION['email'];
//	echo	$_SESSION['password'];
echo 'Hello! ' ;
echo   $_SESSION['name'];




if (isset($_GET['logout'])) {
	$result = mysqli_query($conn, "UPDATE user
SET user_status = '0'
WHERE user_email = '$_SESSION[email]';");
	session_destroy();
	header('location: practice.php?logout_successfully=<span style="color:green">You have successfully Logged Out.</span>');
}

?>
<link rel="shortcut icon" type="image/x-icon" sizes="192x192" href="../../images/Wep_logo.png">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="style.css">

<title>Web App .v1</title>
<body class="Page-Background">
          
         
<form action="">
	<input type="submit" name="logout" value="logout">
</form>
<div id="chatbox">

	<div id="chatarea">
	</div>

	<div id="loginperson">
	</div>

	<div id="textbox">
		<form>
			<textarea rows="4" cols="100" id="text"></textarea>
			<input type="button" value="send" onclick="getText()" />
		</form>
	</div>
	</center>

</div>
<style>
	#chatbox {
		
		height: 500px;
		width: 1200px;

	}

	#chatarea {
		width: 950px;
		height: 400px;
		border: double;
		float: left;
		overflow: auto;

	}

	#loginperson {
		width: 238px;
		height: 497px;
		border: double;
		float: right;
	}

	#textbox {
		width: 750px;
		height: 5px;
		border: double;
		float: left;
	}

	#chatting {
		float: left;
	}
</style>
</body>
<?php
if (!isset($_SESSION['email']) && !isset($_SESSION['password'])) {
	//session_destroy();
	header('location: practice.php');
}

?>