 <!DOCTYPE html>
 <html lang="en">

 <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./style/style.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="shortcut icon" type="image/x-icon" sizes="192x192" href="../images/Wep_logo.png">

      <title>Web App .v1</title>
 </head>

 <body class="Page-Background">

      <?php
          $apiKey = "a1f457f4c4944d4c8b31195fafb6c58f";
          $cityId = "732770";
          $googleApiUrl = "http://api.openweathermap.org/data/2.5/weather?id=" . $cityId . "&lang=en&units=metric&APPID=" . $apiKey;

          $ch = curl_init();

          curl_setopt($ch, CURLOPT_HEADER, 0);
          curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
          curl_setopt($ch, CURLOPT_URL, $googleApiUrl);
          curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
          curl_setopt($ch, CURLOPT_VERBOSE, 0);
          curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
          $response = curl_exec($ch);

          curl_close($ch);
          $data = json_decode($response);
          $currentTime = time();
          ?>
      <div class="navigator-tab" ">

           <nav class=" navbar navbar-expand-sm ">
                <!-- Brand/logo -->
                <a class=" navbar-brand" href="http://localhost/WorkList/App/pages/page.php"><img class="Logo_image" src="../images/Wep_logo.png"></a>
           <ul class=" navbar-nav">
                <li class="nav-tabs">
                     <a class="navigator-text" href="http://localhost/WorkList/App/pages/page.php"><i class="fa fa-fw fa-home"></i> Home</a>
                </li>

                <li class="nav-item">
                     <a class="nav-link" href="http://localhost/WorkList/App/pages/UploadSystem/"><i class="fa fa-fw fa-file"></i> Storage </a>

                </li>
                <li class="nav-item">
                     <a class="nav-link" href="http://localhost/WorkList/App/pages/Chat/chatroom.php"><i class="fa fa-fw fa-wechat"></i> Chat</a>
                </li>
                <li class="nav-item">
                     <a class="nav-link" href="http://localhost/WorkList/App/pages/contact.php"> <i class="fa fa-fw fa-envelope"></i> Contact</a>
                </li>
           </ul>
           </nav>

      </div>
      <div class="clock">
           <div class="hand hour" data-hour-hand></div>
           <div class="hand minute" data-minute-hand></div>
           <div class="hand second" data-second-hand></div>
           <div class="number number1">1</div>
           <div class="number number2">2</div>
           <div class="number number3">3</div>
           <div class="number number4">4</div>
           <div class="number number5">5</div>
           <div class="number number6">6</div>
           <div class="number number7">7</div>
           <div class="number number8">8</div>
           <div class="number number9">9</div>
           <div class="number number10">10</div>
           <div class="number number11">11</div>
           <div class="number number12">12</div>
      </div>
      <div class="time-info"><?php echo date("jS F, Y", $currentTime); ?></div>

      <div>
           <img class="robot-hi" alt="robot" src="https://th.bing.com/th/id/R.b2a56e43d1634e99037239b06429fe2c?rik=4lr%2bQs3WTQLk8Q&pid=ImgRaw&r=0">
           <h1 style="text-align: center; color:aliceblue">Welcome to the Web application! </h1>
           <h2 style="text-align: center; color:aliceblue">Creator St_d05</h2>
           <h6 style="text-align: center; color:aliceblue; position:absolute; left:45%;top:4%">  The web application is still under development !</h6>
      </div>
      <div class="report-container">
           <h2><?php echo $data->name; ?> </h2>
           <div class="time">


                <div><?php echo ucwords($data->weather[0]->description); ?></div>
           </div>
           <div class="weather-forecast">
                <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>°C<span class="min-temperature"><?php echo $data->main->temp_min; ?>°C</span>
           </div>
           <div class="time">
                <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
           </div>
      </div>
      <div class="report-container">
           <h2><?php echo $data->name; ?> </h2>
           <div class="time">


                <div><?php echo ucwords($data->weather[0]->description); ?></div>
           </div>
           <div class="weather-forecast">
                <img src="http://openweathermap.org/img/w/<?php echo $data->weather[0]->icon; ?>.png" class="weather-icon" /> <?php echo $data->main->temp_max; ?>°C<span class="min-temperature"><?php echo $data->main->temp_min; ?>°C</span>
           </div>
           <div class="time">
                <div>Humidity: <?php echo $data->main->humidity; ?> %</div>
                <div>Wind: <?php echo $data->wind->speed; ?> km/h</div>
           </div>
      </div>
      


 </body>

 <script src="./js/clock_scrpit.js"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 </html>