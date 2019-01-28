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
          echo $_SERVER["SERVER_NAME"];
      }
      $conn->close();
      ?> 