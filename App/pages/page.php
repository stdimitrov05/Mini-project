 <!DOCTYPE html>
 <html lang="en">

 <head>
      <meta charset="UTF-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="./style/pageSyle.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

      <title>Document</title>
 </head>

 <body>


      <div class="navigator-tab">

           <nav class="navbar navbar-expand-sm ">
                <!-- Brand/logo -->
                <a class="navbar-brand" href="#">LOGO</a>
                <ul class="navbar-nav">
                     <li class="nav-tabs">
                          <a class="navigator-text" href="./page.php">Home</a>
                     </li>
                     <li class="nav-item">
                          <a class="nav-link" href="./Chat/practice.php">Register</a>
                     </li>
                     <li class="nav-item">
                          <a class="nav-link" href=".http://localhost/WorkList/App/pages/Upload-Image/index.php">Upload File</a>
                     </li>
                     <li class="nav-item">
                          <a class="nav-link" href="./Chat/chatroom.php">Chat</a>
                     </li>
                     <li class="nav-item">
                          <a class="nav-link" href="./contact.php">Contact</a>
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
      <h2>test</h2>

 </body>
 <script>
      setInterval(setClock, 1000)

      const hourHand = document.querySelector('[data-hour-hand]')
      const minuteHand = document.querySelector('[data-minute-hand]')
      const secondHand = document.querySelector('[data-second-hand]')

      function setClock() {
           const currentDate = new Date()
           const secondsRatio = currentDate.getSeconds() / 60
           const minutesRatio = (secondsRatio + currentDate.getMinutes()) / 60
           const hoursRatio = (minutesRatio + currentDate.getHours()) / 12
           setRotation(secondHand, secondsRatio)
           setRotation(minuteHand, minutesRatio)
           setRotation(hourHand, hoursRatio)
      }

      function setRotation(element, rotationRatio) {
           element.style.setProperty('--rotation', rotationRatio * 360)
      }

      setClock()
 </script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

 </html>