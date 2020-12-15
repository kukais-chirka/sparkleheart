
var mybutton = document.getElementById("scrollBtn"); //Anchor Link
window.onscroll = function() {scrollFunction()};
function scrollFunction() {
  if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
      scrollBtn.style.display = "block";
  } else {
      scrollBtn.style.display = "none";
  }
}//Anchor Link
 

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
 
  
 