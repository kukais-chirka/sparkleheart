

// window.onload = function() { //active nav item                     Nestrādāja live versijā
//   var current = location.pathname.split('/')[2];
//   if (current === "") return;
//   var menuItems = document.querySelectorAll('.nav-items a');
//   for (var i = 0, len = menuItems.length; i < len; i++) {
//       if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
//           menuItems[i].className += "active";
//       }
//       console.log(menuItems[i].getAttribute("href").indexOf(current));
//   }
//   console.log(current);
// };

function activeNav(){
    var current = location.pathname.split('/')[2];
    if (current === "") return;
    var menuItems = document.querySelectorAll('.nav-items a');
    for (var i = 0, len = menuItems.length; i < len; i++) {
        if (menuItems[i].getAttribute("href").indexOf(current) !== -1) {
            menuItems[i].className += "active";
        }
        console.log(menuItems[i].getAttribute("href").indexOf(current));
    }
    console.log(current);
  }
  
  function openNavbar() { //Mobile Nav Bar
      var x = document.getElementById("topNav");
      var y = document.getElementById("hamburger");
      if (x.className === "nav-items") {
        x.className += " responsive";
      } else {
        x.className = "nav-items";
      }
      if (x.className === "nav-items responsive"){
        y.className = "cross";
      } else{ y.className = "hamburger" }
  
    }//Mobile Nav Bar
  
  
  //Big Video Player
  function playVideo() {
    var video = document.getElementById("big-video");
    var playerBtn = document.getElementById("svg-box");
    var triangle = document.getElementById("triangle");
    if (video.paused == true) {
      // Play the video
      video.play();
      playerBtn.style.opacity = 0;
      triangle.style.opacity = 0;
    } else {
      playerBtn.style.opacity = 1;
      triangle.style.opacity = 1;
      video.pause(); 
    }
  };

  
    // var mybutton = document.getElementById("scrollBtn"); //Anchor Link
    // window.onscroll = function() {scrollFunction()};
    // function scrollFunction() {
    //   if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
    //       scrollBtn.style.display = "block";
    //   } else {
    //       scrollBtn.style.display = "none";
    //   }
    // }//Anchor Link
   
  
    function submitForm(){ //Thank You After Form
      var x = document.getElementById("thank-you");
      var y = document.getElementById("formBtn");
      var g = document.getElementById("checkbox");
      var h = document.getElementById("acceptTerms");
      var c = document.getElementById("obligation");
      
      x.style.display = "none";
      if (x.style.display === "none") {
        x.style.display = "block";
        y.style.display = "none";
        g.style.display = "none";
        h.style.display = "none";
        c.style.display = "none";
      } else {
          x.style.display = "none";
      }
    }//Thank You After Form
  
  
  
  
  // function openModule(){//Open Video Module
  //   var modal = document.getElementById("video-modal");
  //   var body = document.getElementById("body");
  //   modal.style.display = "flex";
  //   body.style.overflow = "hidden";
  // }//Open Video Module
  
  // function closeModule(){//Close Video Module
  //   var modal = document.getElementById("video-modal");
  //   var body = document.getElementById("body");
  //   var video = document.getElementById("small-video");
  
  //   video.pause();
  //   modal.style.display = "none";
  //   body.style.overflow = "auto";
  // }//Close Video Module
  
  
  // function showStories(){ //Display all stories
  // var stories = document.getElementsByClassName("display-none-tablet");
  // var btn = document.getElementById("toggle-btn");
  // for(var i = 0; i < stories.length; i++) {
  //   if (stories[i].style.display === "block"){
  //     stories[i].style.display = "none";
  //   } else {
  //     stories[i].style.display = "block";
  //   }
  // }
  // if (btn.value == "Skatīt mazāk") { //change button name
  //   btn.value = "Skatīt vairāk";
  // } else {
  //   btn.value = "Skatīt mazāk"
  // }
  
  // }//Display all stories
  
  
// // Text Slider Functions
// document.addEventListener('DOMContentLoaded', function() {  //Display function after HTML is loaded

//   const left = document.querySelector('.left');
//   const right = document.querySelector('.right');
  
//   var slider = document.getElementById('slider');
//   var leftImg = document.getElementById('left');
//   var rightImg = document.getElementById('right');
//   var sections = document.querySelectorAll('.slide').length; // get number of slides
//   var sectionIndex = 1;
  
//   slider.style.width = ' '+ 100 * sections +'%';
  
//   function changeOpacity(){
//      if (sectionIndex == 1 ) {
//       leftImg.style.opacity = '0.4';
//     } else {
//       leftImg.style.opacity = '1';
//     }
//     if (sectionIndex == sections ) {
//       rightImg.style.opacity = '0.4';
//     } else {
//       rightImg.style.opacity = '1';
//     }
    
//   }
  
//   left.addEventListener('click', function() {
//     var leftImg = document.getElementById('left');
//     sectionIndex = (sectionIndex > 1) ? sectionIndex - 1 : 1;
//     slider.style.transform = 'translate(' + (sectionIndex-1) * (-100/sections) +  '%)';
//     changeOpacity();
//   });
  
//   right.addEventListener('click', function() {
//     sectionIndex = (sectionIndex < sections) ? sectionIndex + 1 : sections;
//     slider.style.transform = 'translate(' + (sectionIndex-1) * (-100/sections) +  '%)';
//     changeOpacity();
//   });
  
//   })
//   // Text Slider Functions
  
  
  
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
    // {
    //   featureType: 'road.highway',
    //   elementType: 'labels.icon',
    //   stylers: [{color: '#ffffff'}]
    // },
  
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
    
       // Set CSS for the control wrapper
    var controlWrapper = document.createElement('div');
    // controlWrapper.style.backgroundColor = 'white';
    // controlWrapper.style.borderStyle = 'solid';
    // controlWrapper.style.borderColor = 'gray';
    // controlWrapper.style.borderWidth = '1px';
    // controlWrapper.style.display = 'none';
    controlWrapper.style.cursor = 'pointer';
    controlWrapper.style.textAlign = 'center';
    // controlWrapper.style.width = '86px'; 
    // controlWrapper.style.height = '64px';
  
    controlDiv.appendChild(controlWrapper);
  
    // Set CSS for the zoomIn
    var zoomInButton = document.createElement('div');
    zoomInButton.style.width = '57px'; 
    zoomInButton.style.height = '57px';
    zoomInButton.style.marginBottom = '22px';
    zoomInButton.style.backgroundColor = 'rgb(255, 168, 0, 0.9)';
    zoomInButton.style.borderStyle = 'solid';
    zoomInButton.style.borderColor = '#ffaa00';
    zoomInButton.style.borderWidth = '1px';
    zoomInButton.style.borderRadius = '14px';
    /* Change this to be the .png image you want to use */
    zoomInButton.style.backgroundImage = 'url("/assets/img/+.png")';
    zoomInButton.style.backgroundPosition = 'center';
    zoomInButton.style.backgroundRepeat = 'no-repeat';
    controlWrapper.appendChild(zoomInButton);
  
     // Set CSS for the zoomOut
     var zoomOutButton = document.createElement('div');
     zoomOutButton.style.width = '57px'; 
     zoomOutButton.style.height = '57px';
    //  zoomInButton.style.marginBottom = '22px';
    zoomOutButton.style.backgroundColor = 'rgb(255, 168, 0, 0.9)';
    zoomOutButton.style.borderStyle = 'solid';
    zoomOutButton.style.borderColor = '#ffaa00';
     zoomOutButton.style.borderWidth = '1px';
     zoomOutButton.style.borderRadius = '14px';
     /* Change this to be the .png image you want to use */
     zoomOutButton.style.backgroundImage = 'url("/assets/img/-.png")';
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
  
  
   var mapOptions = {
    center: { lat: 56.952814, lng: 24.113891 },
    zoom: 13,
    disableDefaultUI:true,
    styles: mapStyle,
  }
  var icon1 = "/wp-content/uploads/2020/10/marker.png";
  var icon2 = "/assets/img/marker-dark.png";
  




  
  //  function initMap() {
  //  var mapDiv = document.getElementById('map');
  //   map = new google.maps.Map(mapDiv, mapOptions);
  
  //   var zoomControlDiv = document.createElement('div');
  //   var zoomControl = new ZoomControl(zoomControlDiv, map);
  //   zoomControlDiv.index = 1;
  //   map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(zoomControlDiv);
    
  //   // for (i = 0; i < locations.length; i++){   //show all markers
  
  //   //   // var infowindow = new google.maps.InfoWindow({
  //   //   //   content: contentString NESTRĀDĀ
  //   //   // });
  
  //   //     marker = new google.maps.Marker({
  //   //     position: new google.maps.LatLng(locations[i][0]),
  //   //     map: map,
  //   //     icon: icon1,
  //   //     clickable:true })
        
  //   //     // google.maps.event.addListener(marker, 'click', function() {
  //   //     //   infowindow.open(map,marker); NESTRĀDĀ
  //   //     // });
  //   //   };
  //     google.maps.event.addListener(marker, 'mouseover', function() {
  //       marker.setIcon(icon2);
  //   });
  //     google.maps.event.addListener(marker, 'mouseout', function() {
  //       marker.setIcon(icon1);
  //   });
  //  }
  
  
  
  // function changeMarkers(){ //Vietu maiņa pēc izvēles
  //   var mapDiv = document.getElementById('map');
  
  //   var food = [
  //     [PURCH = {lat: 56.958002, lng: 24.190948}],
  //     [KURTS = {lat: 56.965198, lng: 24.140533}],
  //     [rand5 = {lat: 56.965133, lng: 24.10132}],
  //   ];
  //     var fashion = [
  //     [AUCH = {lat: 56.965196, lng: 24.14056}],
  //     [rand2 = {lat: 56.965192, lng: 24.130531}],
  //     [rand3 = {lat: 56.963242, lng: 24.120125}],
  //     [rand4 = {lat: 56.962343, lng: 24.110536}],
  //   ];
  //     var veikali = [
  //       [rand5 = {lat: 56.965133, lng: 24.10132}],
  //       [rand6 = {lat: 56.938374, lng: 24.09}],
  //       [rand7 = {lat: 56.939374, lng: 24.9}],
  //       [rand8 = {lat: 56.941374, lng: 24.49}],
  //       [rand9 = {lat: 56.942374, lng: 24.29}],
  //       [rand10 = {lat: 56.947374, lng: 24.69}],
  //   ];
  
  //   var e = document.getElementById("input2");
  //   var value = e.options[e.selectedIndex].value;
    
  //   var map = new google.maps.Map(mapDiv, mapOptions);
  
  
  //   var zoomControlDiv = document.createElement('div');
  //   var zoomControl = new ZoomControl(zoomControlDiv, map);
  //   zoomControlDiv.index = 1;
  //   map.controls[google.maps.ControlPosition.RIGHT_BOTTOM].push(zoomControlDiv);
  
  
  //   x = document.getElementById("food-companies");
  //   if (value === "food"){
  //     for (i = 0; i < food.length; i++){
  //       marker = new google.maps.Marker ({
  //         position: new google.maps.LatLng(food[i][0]),
  //         map: map,
  //         icon: icon1 })
  //       };
      
  //      x.classList.add("display-flex")
  
  //   } else if ( value === "fashion") {
  //     for (i = 0; i < fashion.length; i++){
  //       marker = new google.maps.Marker ({
  //         position: new google.maps.LatLng(fashion[i][0]),
  //         map: map,
  //         icon: icon1 })
  //       };
  //       x.classList.remove("display-flex")
  
  //   } else if ( value === "veikali") {
  //     for (i = 0; i < veikali.length; i++){
  //       marker = new google.maps.Marker ({
  //         position: new google.maps.LatLng(veikali[i][0]),
  //         map: map,
  //         icon: icon1 })
  //       };
  //       x.classList.remove("display-flex")
  //   }
    
  // }
      // Initialize dynamic block preview (editor).
    //   if( window.acf ) {
    //     window.acf.addAction( 'render_block_preview/type=map-dropdowns', initializeBlock );
    // }