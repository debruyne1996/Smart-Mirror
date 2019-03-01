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
    <div class="calender" id="calender">
      <?php
      $servername = "localhost";
      $username = "phpmyadmin";
      $password = "capstone1";
      $dbname = "mirror";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      
      $sql = "SELECT showdiv FROM calender";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
          echo '<iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=badebruyne%40oakland.edu&amp;color=%231B887A&amp;ctz=America%2FNew_York" style="border-width:0" width="400" height="400" frameborder="0" scrolling="no"></iframe>';
      }
      $conn->close();
      ?> 
    </div>
    <div class="todo" id="todo">
      <?php
      $output = shell_exec('php todo2.php');
      echo "<pre>$output</pre>"; 
      ?>     
    </div>
    <div class="network" id="network">
      <?php
      $servername = "localhost";
      $username = "phpmyadmin";
      $password = "capstone1";
      $dbname = "mirror";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      
      $sql = "SELECT showdiv FROM network";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
          echo "Network Info<br>";
          echo $_SERVER["SERVER_NAME"];
      }
      $conn->close();
      ?> 
    </div>
  </body>
</html>

