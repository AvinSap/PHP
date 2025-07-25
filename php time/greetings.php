<!DOCTYPE html>
<html>
  <head>
    <title>Welcome Page</title>
    <style>
      body {
        font-family: Arial, sans-serif;
        background: linear-gradient(to right, #667eea, #764ba2);
        color: white;
        text-align: center;
        padding-top: 100px;
      }
      h1 {
        font-size: 3em;
      }
      p {
        font-size: 1.5em;
      }
    </style>
  </head>
  <body>
    <?php
      $hour = date("H");
      if ($hour < 12) {
        $greeting = "☀️ Good morning!";
      } elseif ($hour < 18) {
        $greeting = "🌤️ Good afternoon!";
      } else {
        $greeting = "🌙 Good evening!";
      }

      $ip = $_SERVER['REMOTE_ADDR'];
    ?>

    <h1><?php echo $greeting; ?></h1>
    <p>Welcome to my PHP page.</p>
    <p>
      Your IP address is: <strong><?php echo $ip; ?></strong>
    </p>
    <p>
      The current time is <span id="currentTime"><?php echo date("g:i:s A"); ?></span>.
    </p>
    <p>
      Today is
      <?php echo date("l, F jS, Y"); ?>.
    </p>
    <script>
      function updateTime() {
        const now = new Date();
        let hours = now.getHours();
        let minutes = now.getMinutes();
        let seconds = now.getSeconds();
        let ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12 || 12;
        minutes = minutes < 10 ? '0' + minutes : minutes;
        seconds = seconds < 10 ? '0' + seconds : seconds;
        document.getElementById('currentTime').textContent =
          hours + ':' + minutes + ':' + seconds + ' ' + ampm;
      }
      setInterval(updateTime, 1000);
      updateTime();