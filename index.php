<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
 <head>
  <link rel="stylesheet" type="text/css" href="assets/css/index.css">
<script src="assets/js/clock.js"></script> 
<script src="assets/js/date.js"></script> 
<script src="assets/js/calendar.js"></script>
<script src="assets/js/index.js"></script>
<script src="https://code.jquery.com/jquery-2.1.1.min.js" type="text/javascript"></script>
<script>
$(document).ready(function(){
	setInterval(function(){
		$("#todo").load('todo.php')
    }, 1);
}); //refreshes this div every 2 seconds to check database for new additions.
</script>

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

    <div class="todo" id="todo">
    </div>
    <div class="network">
      <p>Network Information</p>
      <?php
      echo $_SERVER['SERVER_NAME'];
      ?>
    </div>
  </body>
</html>

