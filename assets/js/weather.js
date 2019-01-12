var getLocation = function() {
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(createAPI);
    } else {
        x.innerHTML = "Geolocation is not supported by this browser.";
    }
};

var ur = "";

var createAPI = function(position) {
  ur = "http://api.openweathermap.org/data/2.5/weather?lat=" + position.coords.latitude + "&lon=" + position.coords.longitude;
  var json = undefined;
  
  $.ajax({
  dataType: "json",
  url: ur,
  data: function(data) {
  },
  success: function(success) {
    json = success;
    document.write("The weather outside is " + json.weather[0].main + ".");
  }
});
};

getLocation();