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
          echo '<iframe src="https://calendar.google.com/calendar/embed?height=400&amp;wkst=1&amp;bgcolor=%23FFFFFF&amp;src=badebruyne%40oakland.edu&amp;color=%231B887A&amp;ctz=America%2FNew_York" style="border-width:0" width="400" height="400" frameborder="0" scrolling="no"></iframe>'
      }
      $conn->close();
      ?> 
