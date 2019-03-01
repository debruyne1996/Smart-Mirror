<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>CSI 3660 Project</title>
    <link rel="canonical" href="https://getbootstrap.com/docs/4.0/examples/jumbotron/">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css" integrity="sha384-rwoIResjU2yc3z8GV/NPeZWAv56rSmLldC3R/AZzGRnGxQQKnKkoFVhFQhNUwEyJ" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

    <!-- Bootstrap core CSS -->
    <link href="../../dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="jumbotron.css" rel="stylesheet">
  </head>
<?php
require_once("db_connect.php");
?>
<body>
<h2>
    Your todo list
</h2>
<p><a href="create.php">Add a new task</a></p>
<?php
db();
global $link;
$query  = "SELECT id, task FROM todo";
$result = mysqli_query($link, $query);
//check if there's any data inside the table
if(mysqli_num_rows($result) >= 1){
    while($row = mysqli_fetch_array($result)){
        $id = $row['id'];
        $task = $row['task'];
        ?>

    <ul>
        <li><a href="detail.php?id=<?php echo $id?>"><?php echo $task ?></a></li>
        <button type="button"><a href="edit.php?id=<?php echo $id?>">Edit</a></button>
        <button type="button"><a href="delete.php?id=<?php echo $id?>">Delete</a></button>
    </ul>
<?php
    }
}

?>
    <div class="container">
      <!-- Example row of columns -->
      <div class="row">
        <div class="col-md-4" img align="middle">
          <h2 style="text-align:center">Mirror Control Panel</h2>
          <img src="https://techcrunch.com/wp-content/uploads/2017/05/onedrive-illo3.jpg?w=730&crop=1" style=" width: 200px; height: 100px;" > 
          <p style="text-align:center">Personalize your mirror to fit your lifestyle! </p>
          <p style="text-align:center"><a class="btn btn-secondary" href="../control.php" role="button">Click Here &raquo;</a></p>
        </div>
        <div class="col-md-4" img align="middle">
          <h2 style="text-align:center">Home</h2>
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRfDmmNM80epGd5K9vhprnCj_6SOzAxwzPKVT9D7Wz_Fe6FeMuKw" style=" width: 200px; height: 100px;">

          <p style="text-align:center">Go back Home!</p>
          <p style="text-align:center"><a class="btn btn-secondary" href="../index.html" role="button">Click Here &raquo;</a></p>
        </div>
        <div class="col-md-4" img align="middle">
          <h2 style="text-align:center">Report</h2>
		<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTRfDmmNM80epGd5K9vhprnCj_6SOzAxwzPKVT9D7Wz_Fe6FeMuKw" style=" width: 200px; height: 100px;">

          <p style="text-align:center">Follow this link for our project report!.</p>
          <p style="text-align:center"><a class="btn btn-secondary" href="../report.html" role="button">Click Here &raquo;</a></p>
        </div>
      </div>

      <hr>

      <footer>
        <p style="text-align: center">&copy; Senior Capstone Winter 2019</p>
      </footer>
    </div>


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js" integrity="sha384-A7FZj7v+d/sdmMqp/nOQwliLvUsJfDHW+k9Omg/a/EheAdgtzNs3hpfag6Ed950n" crossorigin="anonymous"></script>
    <script>window.jQuery || document.write('<script src="../../assets/js/vendor/jquery.min.js"><\/script>')</script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
</html>

</body>
</html>
