<?php
error_reporting(E_ALL & ~E_NOTICE);
include('../db/database.php') ?>
<!DOCTYPE html>
<html>

<head>
          <meta charset="utf-8">
          <meta name="viewport" content="width=device-width, initial-scale=1.0">

          <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

          <link rel="stylesheet" type="text/css" href="../style/global.scss">

          <title>File Upload </title>
</head>

<body>
          <div class="file__upload">
                    <div class="header">
                              <p><i class="fa fa-cloud-upload fa-2x"></i><span><span>up</span>load</span></p>
                    </div>
                    <form action="" method="POST" enctype="multipart/form-data" class="body">
                              <!-- Sharable Link Code -->
                              <input type="text" name="file_info"  require placeholder="File info: ">
                              <input type="file" name="file" id="upload" required>
                              <label for="upload">
                                        <i class="fa fa-file-text-o fa-3x"></i>
                                        <p>
                                                  <strong>Drag and drop</strong> files here<br>
                                                  or <span>browse</span> to begin the upload
                                        </p>
                              </label>
                              <button name="upload" class="btn">Upload</button>
                    </form>
          </div>
</body>

</html>