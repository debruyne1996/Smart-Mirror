function showDate(){
      var d = new Date();
      var d = new Date();
      var d = new Date();
      var days = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
      var months = ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"];
      document.getElementById("MyDateDisplay").innerHTML = days[d.getDay()] + ", " + months[d.getMonth()] + " " + d.getDate();
      }
showDate();