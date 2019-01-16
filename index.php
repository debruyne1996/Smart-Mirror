<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <head>
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
<script src="assets/js/clock.js"></script> 
<script src="assets/js/date.js"></script> 
<script src="assets/js/calendar.js"></script>
<script src="assets/js/index.js"></script>
</head> 
<html>
  <body>
    <div id="MyClockDisplay" class="clock">
    <script>
      showTime();
    </script>
    </div>
    <div id="MyDateDisplay" class="date">
    <script>
      showDate()
      </script>
    </div>
    <div class="weather">
      <a class="weatherwidget-io" href="https://forecast7.com/en/42d68n83d13/rochester/?unit=us" data-label_1="ROCHESTER" data-label_2="WEATHER" data-basecolor="#000000" data-accent="#000000" data-textcolor="#ffffff" data-highcolor="#ffffff" data-lowcolor="#ffffff" data-suncolor="#f4ff00" data-mooncolor="#cccccc" data-cloudcolor="#cccccc" data-cloudfill="#cccccc" data-raincolor="#cccccc" data-snowcolor="#cccccc" >ROCHESTER WEATHER</a>
      <script>
      !function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src='https://weatherwidget.io/js/widget.min.js';fjs.parentNode.insertBefore(js,fjs);}}(document,'script','weatherwidget-io-js');
      </script>
    </div>
    <div class="todo">
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
      
      $sql = "SELECT task FROM todo";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
          echo "<table><tr><th>ToDo List</th></tr>";
          // output data of each row
          while($row = $result->fetch_assoc()) {
              echo "<tr><td>".$row["task"]."</td></tr>";
          }
          echo "</table>";
      } else {
          echo "0 results";
      }
      $conn->close();
      ?> 
    </div>
    <div class="network">
      <p>Network Information</p>
      <?php
      echo $_SERVER['SERVER_NAME'];
      ?>
    </div>
  </body>
</html>

