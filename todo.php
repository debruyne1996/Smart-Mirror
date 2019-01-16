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
          echo "No ongoing tasks";
      }
      $conn->close();
      ?> 