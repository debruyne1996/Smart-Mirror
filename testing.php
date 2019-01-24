<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <head>
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
<script src="assets/js/clock.js"></script> 
<script src="assets/js/date.js"></script> 
<script src="assets/js/calendar.js"></script>
<script src="assets/js/index.js"></script>
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
      $servername = "localhost";
      $username = "root";
      $password = "capstone1";
      $dbname = "mirror";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      
      $sql = "SELECT showdiv FROM weather";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
          echo '<a class="weatherwidget-io" href="https://forecast7.com/en/42d68n83d13/rochester/?unit=us" data-label_1="ROCHESTER" data-label_2="WEATHER" data-basecolor="#000000" data-accent="#000000" data-textcolor="#ffffff" data-highcolor="#ffffff" data-lowcolor="#ffffff" data-suncolor="#f4ff00" data-mooncolor="#cccccc" data-cloudcolor="#cccccc" data-cloudfill="#cccccc" data-raincolor="#cccccc" data-snowcolor="#cccccc" >ROCHESTER WEATHER</a>';
          echo "<script type='text/javascript'> !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js'); </script>";
      }
      $conn->close();
      ?> 
    </div>

    </div>

    <div class="todo" id="todo">
      <?php
      $servername = "localhost";
      $username = "root";
      $password = "capstone1";
      $dbname = "mirror";
      
      // Create connection
      $conn = new mysqli($servername, $username, $password, $dbname);
      // Check connection
      if ($conn->connect_error) {
          die("Connection failed: " . $conn->connect_error);
      }
      
      $sql = "SELECT showdiv FROM todoShow";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
          echo '<script> $(document).ready(function(){setInterval(function(){$("#todo").load("todo.php")}, 1);}); </script>';
      }
      $conn->close();
      ?> 
    </div>
    <div class="network">
      <?php
      $servername = "localhost";
      $username = "root";
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
          echo "<p>Network Information</p>";
          echo $_SERVER['SERVER_NAME'];
      }
      $conn->close();
      ?> 
    </div>
  </body>
</html>

