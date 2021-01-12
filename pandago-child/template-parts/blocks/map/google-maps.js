// function sleep(milliseconds) {
//   const date = Date.now();
//   let currentDate = null;
//   do {
//     currentDate = Date.now();
//   } while (currentDate - date < milliseconds);
// }

// sleep(7000);
// console.log(types);
var businessTypes = types; //Get value from google-map.php
// var lol = Object.keys(types).map((key) => [Number(key), types[key]]);  //Make Object to Array
// console.log(businessTypes);
// console.log(lol);
 //MAP variables
 var map;
 var mapStyle = [   //KARTES STILS
   {elementType: 'geometry', stylers: [{color: '#E8E8E8'}]},
   {elementType: 'labels.text.stroke', stylers: [{visibility:'off'}]},
   {elementType: 'labels.text.fill', stylers: [{color: '#AEAEAE'}]},
   {
     featureType: 'administrative.locality',
     elementType: 'labels.text.fill',
     stylers: [{color: '#4f4f4f'}]
   },
   {
     featureType: 'poi',
     elementType: 'labels.text.fill',
     stylers: [{visibility:'off'}]
   },
   { featureType: 'poi',
     stylers: [{visibility: 'off'}]
   },
   { featureType: 'transit',
     stylers: [{visibility: 'off'}]
   },
   {
     featureType: 'road.arterial',
     elementType: 'geometry',
     stylers: [{color: '#ffffff'}]
   },
   {
     featureType: 'road.arterial',
     elementType: 'geometry.stroke',
     stylers: [{color: '#E4E4E4'},  ]
   },
   {
     featureType: 'road.arterial',
     elementType: 'labels',
     stylers: [{visibility:'off'}]
   },
   {
     featureType: 'road.highway',
     elementType: 'geometry',
     stylers: [{color: '#f0f0f0'}]
   },
   {
     featureType: 'road.highway',
     elementType: 'geometry.stroke',
     stylers: [{color: '#DBDBDB'}]
   },
   {
     featureType: 'road.highway',
     elementType: 'labels.text.fill',
     stylers: [{color: '#ffffff'}]
   },
   {
     featureType: 'transit',
     elementType: 'geometry',
     stylers: [{visibility: 'off'}]
   },
 
   {
     featureType: 'water',
     elementType: 'geometry',
     stylers: [{color: '#D3D3D3'}]
   },
   {
     featureType: 'water',
     elementType: 'labels.text.fill',
     stylers: [{color: '#D3D3D3'}]
   },
   {
     featureType: 'water',
     elementType: 'labels.text.stroke',
     stylers: [{color: '#D3D3D3'}]
   },
 
 ];
 var locations = [  //VISAS LOKĀCIJAS
   [PURCH = {lat: 56.958002, lng: 24.190948}],
   [KURTS = {lat: 56.951089, lng: 24.121023}],
   [AUCH = {lat: 56.965196, lng: 24.140531}],
   [rand1 = {lat: 56.965314, lng: 24.140524}],
   [rand2 = {lat: 56.965192, lng: 24.130531}],
   [rand3 = {lat: 56.963242, lng: 24.120125}],
   [rand4 = {lat: 56.962343, lng: 24.110536}],
   [rand5 = {lat: 56.965133, lng: 24.10132}],
   [rand6 = {lat: 56.938374, lng: 24.09}],
   [rand7 = {lat: 56.939374, lng: 24.9}],
   [rand8 = {lat: 56.941374, lng: 24.49}],
   [rand9 = {lat: 56.942374, lng: 24.29}],
   [rand10 = {lat: 56.947374, lng: 24.69}],
 ];
 var contentString = [///nestrādā
   ['<h1>PURCH</h1>'],
   ['<h1>KURTS</h1>'],
   ['<h1>AUCH</h1>'],
   ['<h1>rand1</h1>'],
   ['<h1>rand2</h1>'],
   ['<h1>rand3</h1>'],
   ['<h1>rand4</h1>'],
   ['<h1>rand5</h1>'],
   ['<h1>rand6</h1>'],
   ['<h1>rand7</h1>'],
   ['<h1>rand8</h1>'],
   ['<h1>rand9</h1>'],
   ['<h1>rand10</h1>']
 ]; ///nestrādā
 
 
  function ZoomControl(controlDiv, map){ ///Pietuvināšana un attālināšana
    controlDiv.style.padding = "5px";
    controlDiv.style.marginRight = '67px';
    controlDiv.style.marginBottom = '91px';
    if (window.innerWidth < 900){
     controlDiv.style.display = 'none';
    } else{
     controlDiv.style.display = 'block'
    }

   var controlWrapper = document.createElement('div');
   controlWrapper.style.cursor = 'pointer';
   controlWrapper.style.textAlign = 'center';
 
   controlDiv.appendChild(controlWrapper);
 
   // Set CSS for the zoomIn
   var zoomInButton = document.createElement('div');
   zoomInButton.style.width = '57px'; 
   zoomInButton.style.height = '57px';
   zoomInButton.style.marginBottom = '22px';
   zoomInButton.style.backgroundColor = '#ffa800';
   zoomInButton.style.borderStyle = 'solid';
   zoomInButton.style.borderColor = '#ffaa00';
   zoomInButton.style.borderWidth = '1px';
   zoomInButton.style.borderRadius = '14px';
   /* Change this to be the .png image you want to use */
   zoomInButton.style.backgroundImage = 'url("/wp-content/uploads/2020/10/unnamed-file-1.png")';
   zoomInButton.style.backgroundPosition = 'center';
   zoomInButton.style.backgroundRepeat = 'no-repeat';
   controlWrapper.appendChild(zoomInButton);
 
    // Set CSS for the zoomOut
    var zoomOutButton = document.createElement('div');
    zoomOutButton.style.width = '57px'; 
    zoomOutButton.style.height = '57px';
   //  zoomInButton.style.marginBottom = '22px';
   zoomOutButton.style.backgroundColor = '#ffa800';
   zoomOutButton.style.borderStyle = 'solid';
   zoomOutButton.style.borderColor = '#ffaa00';
    zoomOutButton.style.borderWidth = '1px';
    zoomOutButton.style.borderRadius = '14px';
    /* Change this to be the .png image you want to use */
    zoomOutButton.style.backgroundImage = 'url("/wp-content/uploads/2020/10/unnamed-file.png")';
    zoomOutButton.style.backgroundPosition = 'center';
    zoomOutButton.style.backgroundRepeat = 'no-repeat';
    controlWrapper.appendChild(zoomInButton);
    controlWrapper.appendChild(zoomOutButton);
 
      // Setup the click event listener - zoomIn
   google.maps.event.addDomListener(zoomInButton, 'click', function() {
     map.setZoom(map.getZoom() + 1);
   });
 
   // Setup the click event listener - zoomOut
   google.maps.event.addDomListener(zoomOutButton, 'click', function() {
     map.setZoom(map.getZoom() - 1);
   });  
 
 
  }//Pietuvināšana un attālināšana
 
 
 var icon1 = "/wp-content/uploads/2020/10/marker.png";
 var icon2 = "/assets/img/marker-dark.png";

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
   console.log(businessTypes);
   for (i = 0; i < businessTypes.length; i++ ){
    businessType = businessTypes[i].field_5fa1a5536bae7; // Uzņēmuma Veids Ēdināšana, Skaistumkopšana utt
    businesses   = businessTypes[i].field_5fa1a6376bae8; // Uzņēmumi
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
    businessType = businessTypes[i].field_5fa1a5536bae7; // Uzņēmuma Veids Ēdināšana, Skaistumkopšana utt
    businesses   = businessTypes[i].field_5fa1a6376bae8; // Uzņēmumi

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
