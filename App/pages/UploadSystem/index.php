<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
          <link rel="shortcut icon" type="image/x-icon" sizes="192x192" href="../../images/Wep_logo.png">
          <link rel="stylesheet" href="style.css">

<title>Web App .v1</title>
<body class="Page-Background">
    

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

<form method="POST" action="upload.php" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="Upload">
</form>

<?php

$files = scandir("uploads");
for ($a = 2; $a < count($files); $a++) {
?>
    <p>
        <?php echo $files[$a]; ?>

        <a href="uploads/<?php echo $files[$a]; ?>" download="<?php echo $files[$a]; ?>">
            Download
        </a>

        <a href="delete.php?name=uploads/<?php echo $files[$a]; ?>" style="color: red;">
            Delete
        </a>
    </p>
<?php
}

?>
</body>

