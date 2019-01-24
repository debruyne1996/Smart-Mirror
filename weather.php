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