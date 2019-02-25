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
      
      $sql = "SELECT showdiv FROM todoShow";
      $result = $conn->query($sql);
      
      if ($result->num_rows > 0) {
          echo '<script> $(document).ready(function(){setInterval(function(){$("#todo").load("todo.php")}, 5000);}); </script>';
      }
      $conn->close();
      ?> 
