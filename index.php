<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <head>
<link rel="stylesheet" type="text/css" href="assets/css/index.css">
<script src="assets/js/clock.js"></script> 
<script src="assets/js/date.js"></script> 
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
</head> 
<html>
  <body>
    <div id="MyClockDisplay" class="clock">
      <?php
      $output = shell_exec('php clock.php');
      echo "<pre>$output</pre>"; 
      ?> 
    </div>
    <div id="MyDateDisplay" class="date">
      <?php
      $output = shell_exec('php date.php');
      echo "<pre>$output</pre>"; 
      ?> 
    </div>
    <div class="weather">
      <?php
      $output = shell_exec('php weather.php');
      echo "<pre>$output</pre>"; 
      ?> 
    </div>
    <div class="calender">
    <iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=badebruyne%40oakland.edu&amp;color=%231B887A&amp;ctz=America%2FNew_York" style="border-width:0" width="400" height="400" frameborder="0" scrolling="no"></iframe>
    </div>
    <div class="todo" id="todo">
      <?php
      $output = shell_exec('php todo2.php');
      echo "<pre>$output</pre>"; 
      ?>     
    </div>
    <div class="network">
      <?php
      $output = shell_exec('php network.php');
      echo "<pre>$output</pre>"; 
      echo $_SERVER["SERVER_NAME"];
      ?> 
    </div>
  </body>
</html>

