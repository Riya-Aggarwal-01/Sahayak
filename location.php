<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Find Nearby Hospitals</title>
    <!-- Link to external JavaScript file -->
    <script defer>
       var map;
var service;
var infowindow;

function initMap() {
  // Default map center (India)
  var india = { lat: 20.5937, lng: 78.9629 };
  map = new google.maps.Map(document.getElementById("map"), {
    center: india,
    zoom: 5,
  });

  // Add a search box for user input
  var input = document.getElementById("location-input");
  var searchBox = new google.maps.places.SearchBox(input);

  // Bias the SearchBox results towards current map bounds
  map.addListener("bounds_changed", function () {
    searchBox.setBounds(map.getBounds());
  });

  // Listen for user selecting a place from search results
  searchBox.addListener("places_changed", function () {
    var places = searchBox.getPlaces();

    // Check if places were returned
    if (!places || places.length === 0) {
      console.error("No places found. User may not have selected a location from suggestions.");
      return;
    }

    // Get the first place entered by the user
    var place = places[0];

    // Log the place details for debugging
    console.log("Place details:", place);

    if (!place.geometry || !place.geometry.location) {
      console.error("Place has no geometry.");
      return;
    }

    // Center the map at the entered location
    map.setCenter(place.geometry.location);
    map.setZoom(13);
    console.log("Centering map at coordinates: ", place.geometry.location.lat(), place.geometry.location.lng());

    // Fetch and display nearby hospitals
    findNearbyHospitals(place.geometry.location);
  });

  // Load configuration after map initialization
  fetch('config.json')
    .then(response => response.json())
    .then(config => {
      console.log('Config loaded:', config);
      var radius = config.hospitalSearchRadius;
      var defaultLocation = config.defaultLocation;

      if (defaultLocation) {
        map.setCenter(defaultLocation);
      }
    });
}

function findNearbyHospitals(location) {
  var request = {
    location: location,
    radius: "5000", // 5km radius
    type: ["hospital"],
  };

  console.log("Fetching nearby hospitals at: ", location);

  service = new google.maps.places.PlacesService(map);
  service.nearbySearch(request, function (results, status) {
    if (status === google.maps.places.PlacesServiceStatus.OK) {
      console.log("Hospitals found:", results);
      for (var i = 0; i < results.length; i++) {
        createMarker(results[i]);
      }
    } else {
      console.error("Places API error: ", status);
    }
  });
}

function createMarker(place) {
  var marker = new google.maps.Marker({
    map: map,
    position: place.geometry.location,
    title: place.name,
  });

  var infowindow = new google.maps.InfoWindow({
    content: `<strong>${place.name}</strong><br>Rating: ${place.rating || "N/A"}`

  });

  marker.addListener("click", function () {
    infowindow.open(map, marker);
  });
}

// Initialize the map once the page is loaded
window.onload = initMap;

fetch('config.json')
  .then(response => response.json())
  .then(config => {
    console.log('Config loaded:', config);
    var radius = config.hospitalSearchRadius;
    var defaultLocation = config.defaultLocation;
    map.setCenter(defaultLocation);
  });
    </script>
    <!-- Link to Google Maps API with your API key -->
    <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA5wOZy12B0x3XH4uhjMx5WRVCphbWXJzs&libraries=places"
      async
      defer
    ></script>
    <style>
      /* Some simple styling for the input and map */
      #location-input {
        width: 400px;
        padding: 10px;
        margin-bottom: 10px;
      }
      #map {
        height: 500px;
        width: 100%;
      }
    </style>
  </head>
  <body>
    <h1>Find Nearby Hospitals</h1>
    <!-- Input field for location -->
    <input
      id="location-input"
      type="text"
      placeholder="Enter a location (e.g., city, address)"
    />
    <!-- Div where the map will be displayed -->
    <div id="map"></div>
  </body>
</html>