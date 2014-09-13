
// This example adds a search box to a map, using the Google Place Autocomplete
// feature. People can enter geographical searches. The search box will return a
// pick list containing a mix of places and predicted search terms.

function initialize() {
    
  var markers = [];
  var map_options = {
          center: new google.maps.LatLng(-25.274398, 133.775136),
          zoom: 4,
          mapTypeId: google.maps.MapTypeId.ROADMAP
        }

  var map = new google.maps.Map(document.getElementById('map-canvas'), map_options);

  // Create the search box and link it to the UI element.
  var input = /** @type {HTMLInputElement} */(
      document.getElementById('pac-input'));
  map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);

  var searchBox = new google.maps.places.SearchBox(
    /** @type {HTMLInputElement} */(input));

  // Listen for the event fired when the user selects an item from the
  // pick list. Retrieve the matching places for that item.
  google.maps.event.addListener(searchBox, 'places_changed', function() {
    var places = searchBox.getPlaces();

    if (places.length == 0) {
      return;
    }
    for (var i = 0, marker; marker = markers[i]; i++) {
      marker.setMap(null);
    }

    // For each place, get the icon, place name, and location.
    markers = [];
    var bounds = new google.maps.LatLngBounds();
    for (var i = 0, place; place = places[i]; i++) {
      var image = {
        url: place.icon,
        size: new google.maps.Size(71, 71),
        origin: new google.maps.Point(0, 0),
        anchor: new google.maps.Point(17, 34),
        scaledSize: new google.maps.Size(25, 25)
      };

      // Create a marker for each place.
      var marker = new google.maps.Marker({
        map: map,
        icon: image,
        title: place.name,
        position: place.geometry.location
      });

      markers.push(marker);

      bounds.extend(place.geometry.location);
    }

    map.fitBounds(bounds);
  });

  // Bias the SearchBox results towards places that are within the bounds of the
  // current map's viewport.
  google.maps.event.addListener(map, 'bounds_changed', function() {
    var bounds = map.getBounds();
    searchBox.setBounds(bounds);
  });
  document.getElementById('loadMap').hidden=true;
  showMap();
}
function showMap() {
    document.getElementById('googleMap').hidden=false;
  document.getElementById('showMap').hidden=true;
  document.getElementById('hideMap').hidden=false;
}
function hideMap(){
    document.getElementById('googleMap').hidden=true;
    document.getElementById('hideMap').hidden=true;
    document.getElementById('showMap').hidden=false;
}

//Add More Lots
function addLot() {
    document.getElementById('lots').innerHTML+="<div class='form-inline'><input type='text' class='form-control' id='lotPlan1' placeholder=''> <input type='text' class='form-control' id='lotPlan2' placeholder=''></div>";
}

// Print Friendly version
function printVersion() {
    document.getElementById('printV').hidden=true;
    document.getElementById('sideMenu1').hidden=true;
    document.getElementById('sideMenu2').hidden=true;
    document.getElementById('mainInfo').style.marginLeft ="-10px";
    document.getElementById('exitV').hidden=false;
}
function exitPrintVersion() {
    document.getElementById('mainInfo').style.marginLeft ="200px";
    document.getElementById('printV').hidden=false;
    document.getElementById('sideMenu1').hidden=false;
    document.getElementById('sideMenu2').hidden=false;
    document.getElementById('exitV').hidden=true;
}

//Type of Site Check Box 

var sField=" ";
//uncheckRadioButtons();

function checkSiteFields(){
    
    if(document.getElementById('singleSite').checked){
        document.getElementById('singleSiteSummary').hidden=false;
    }
    else {
        document.getElementById('singleSiteSummary').hidden=true;
    }

}
function checkLandFields(){
    
    if(document.getElementById('subdivisionSite').checked){
        document.getElementById('landSubdivisionSite').hidden=false;
        document.getElementById('developmentFormat').hidden=false;
    }
    else {
        document.getElementById('landSubdivisionSite').hidden=true;
        document.getElementById('developmentFormat').hidden=true;
    }    
}

//Type of Developmment Check Box

function checkResidentialFields() {
    if(document.getElementById('residential').checked){
        document.getElementById('buildingResidentialFormat').hidden=false;
    }
    else {
        document.getElementById('buildingResidentialFormat').hidden=true;
    }
}

function checkCommercialFields() {
    if(document.getElementById('commercial').checked){
        document.getElementById('buildingCommercialFormat').hidden=false;
    }
    else {
        document.getElementById('buildingCommercialFormat').hidden=true;
    }
}
function checkIndustrialFields() {
    if(document.getElementById('industrial').checked){
        document.getElementById('buildingIndustrialFormat').hidden=false;
    }
    else {
        document.getElementById('buildingIndustrialFormat').hidden=true;
    }
}
function checkInfrastructureFields() {
    if(document.getElementById('infrastructure').checked){
        document.getElementById('bufferRequirementsInfrastructure').hidden=false;
    }
    else {
        document.getElementById('bufferRequirementsInfrastructure').hidden=true;
    }
}

