

var businessTypes = Object.keys(types).map((key) => [Number(key), types[key]]);  //Make Object to Array

var mapOptions = {
  center: { lat: 56.952814, lng: 24.113891 },
  zoom: 13,
  disableDefaultUI:true,
  styles: mapStyle,
}
function initMap() {
  var mapDiv = document.getElementById('map');
   map = new google.maps.Map(mapDiv, mapOptions);
 
   var zoomControlDiv = document.createElement('div');
   var zoomControl = new ZoomControl(zoomControlDiv, map);
   zoomControlDiv.index = 1;
   map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(zoomControlDiv);
   
   for (i = 0; i < businessTypes.length; i++ ){
    businessType = businessTypes[i][1].field_5fa1a5536bae7; // Uzņēmuma Veids Ēdināšana, Skaistumkopšana utt
    businesses   = businessTypes[i][1].field_5fa1a6376bae8; // Uzņēmumi
      for (a = 0; a < businesses.length; a++ ){
        businessName = businesses[a].field_5fa1a6846bae9; // Bussinesses names example, Purch, Kurts utt
        lat          = businesses[a].field_5fa1aa8d6baed; // Coordinates lat
        lng          = businesses[a].field_5fa1ab3a6baee; // Coordinates lng
      

      for (x = 0; x < businesses.length; x++){
        marker = new google.maps.Marker ({
          position: new google.maps.LatLng(lat,lng),
          map: map,
          icon: icon1 })
        };
      }
   }   

     google.maps.event.addListener(marker, 'mouseover', function() {
       marker.setIcon(icon2);
   });
     google.maps.event.addListener(marker, 'mouseout', function() {
       marker.setIcon(icon1);
   });
  }

  function changeMarkers(){ //Vietu maiņa pēc biznesa tipa izvēles
    var mapDiv = document.getElementById('map');

    var e = document.getElementById("input2");
    var value = e.options[e.selectedIndex].value;

    var map = new google.maps.Map(mapDiv, mapOptions);
  
    var zoomControlDiv = document.createElement('div');
    var zoomControl = new ZoomControl(zoomControlDiv, map);

    zoomControlDiv.index = 1;
    map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(zoomControlDiv);
    
    var imageSrc = document.getElementById('companieImage');
    var companyName = document.getElementById('companieName');


   for (i = 0; i < businessTypes.length; i++ ){
    businessType = businessTypes[i][1].field_5fa1a5536bae7; // Uzņēmuma Veids Ēdināšana, Skaistumkopšana utt
    businesses   = businessTypes[i][1].field_5fa1a6376bae8; // Uzņēmumi

      for (a = 0; a < businesses.length; a++ ){
        businessName = businesses[a].field_5fa1a6846bae9; // Bussinesses names example, Purch, Kurts utt
        lat          = businesses[a].field_5fa1aa8d6baed; // Coordinates lat
        lng          = businesses[a].field_5fa1ab3a6baee; // Coordinates lng
        image        = businesses[a].field_5fa1a7266baea; // Image
        phone        = businesses[a].field_5fa1a7506baeb; // Phone Number
        adress       = businesses[a].field_5fa1a7796baec; // Adress
      
    companyDiv = document.getElementById(businessType)

    if (value === businessType){
      for (x = 0; x < businesses.length; x++){
        marker = new google.maps.Marker ({
          position: new google.maps.LatLng(lat,lng),
          map: map,
          icon: icon1 })
          companyDiv.classList.add("display-flex");
        };
    } else {
      companyDiv.classList.remove("display-flex")
    }
      }
   }   
  }
