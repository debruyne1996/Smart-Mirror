      <script src="assets/js/clock.js"></script> 
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
      
      $sql = "SELECT showdiv FROM date";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
          echo "<script type='text/javascript'> showDate() </script>";
      }
      $conn->close();
      ?> 