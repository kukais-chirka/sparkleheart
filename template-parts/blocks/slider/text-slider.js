// Text Slider Functions
// document.addEventListener('DOMContentLoaded', function() {  //Display function after HTML is loaded

    const left = document.querySelector('.left');
    const right = document.querySelector('.right');
    
    var slider = document.getElementById('slider');
    var leftImg = document.getElementById('left');
    var rightImg = document.getElementById('right');
    var sections = document.querySelectorAll('.slide').length; // get number of slides
    var sectionIndex = 1;
    
    slider.style.width = ' '+ 100 * sections +'%';
    
    function changeOpacity(){
       if (sectionIndex == 1 ) {
        leftImg.style.opacity = '0.4';
      } else {
        leftImg.style.opacity = '1';
      }
      if (sectionIndex == sections ) {
        rightImg.style.opacity = '0.4';
      } else {
        rightImg.style.opacity = '1';
      }
      
    }
    
    left.addEventListener('click', function() {
      var leftImg = document.getElementById('left');
      sectionIndex = (sectionIndex > 1) ? sectionIndex - 1 : 1;
      slider.style.transform = 'translate(' + (sectionIndex-1) * (-100/sections) +  '%)';
      changeOpacity();
    });
    
    right.addEventListener('click', function() {
      sectionIndex = (sectionIndex < sections) ? sectionIndex + 1 : sections;
      slider.style.transform = 'translate(' + (sectionIndex-1) * (-100/sections) +  '%)';
      changeOpacity();
    });
    
    // })
    // Text Slider Functions