


// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
// var player = [];
// var newplayer = [];
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player = [];

function openModule(clicked_box) {//Open Video Module

  var modal = document.getElementById("video-modal-" + clicked_box);
  modal.style.display = "flex";

  var createdVideoID ;
  
  console.log(createdVideoID);
  var videoID = row[clicked_box].field_5faa821360bbb;
 
  console.log(clicked_box);
   if (createdVideoID === clicked_box){
     console.log('ir jau tads video');
   } else {
       // onYouTubeIframeAPIReady(clicked_box)
  player = new YT.Player('player-' + clicked_box, {
    height: '349',
    width: '560',
    videoId: videoID,
    playerVars: { 'color': 'white', 'modestbranding': 1, 'rel': 0, 'enablejsapi': 1 },
    events: {
      'onReady': onPlayerReady,
      'onStateChange': onPlayerStateChange
    },
  })
  return createdVideoID = clicked_box;
  }


}//Open Video Modulee

function playSmallVideo(clicked_box) {
  var playerBtn = document.getElementById("svg-box-container-player-" + clicked_box);
  // console.log(clicked_box);
  // console.log(player.f.id);
  // var player = document.getElementById("player-" + clicked_box);
  console.log(player);
  console.log(playerBtn);
  // console.log(clicked_box);
  // console.log(newplayer);
  if (playerStatus === 2 || playerStatus === -1 || playerStatus === -5) {  //paused or  unstarted or video cued
    // player.loadVideoById({videoId:'1PalAURGxtM'});
    player.playVideo();
    playerBtn.style.opacity = 0;
  } else if (playerStatus === 3 || playerStatus === 1) { //buffering or playing
    player.pauseVideo();
    playerBtn.style.opacity = 1;
  }

}

function onYouTubeIframeAPIReady(index) {

  // for (i = 0; i <= row.length; i++) {

    // console.log(player);
    // var videoID = row[index].field_5faa821360bbb;

    // player = new YT.Player('player-' + index, {
    //   height: '349',
    //   width: '560',
    //   videoId: videoID,
    //   playerVars: { 'color': 'white', 'modestbranding': 1, 'rel': 0, 'enablejsapi': 1 },
    //   events: {
    //     'onReady': onPlayerReady,
    //     'onStateChange': onPlayerStateChange
    //   },

    // })
    // console.log(player);
    // console.log(player.f.id === '#player-' + index );
    // if (player.f.id !== '#player-' + index){



  // }
}
var playerStatus = 2;
function onPlayerStateChange(event) {
  playerStatus = event.data;
  // console.log(player.f.id);
  // console.log(clicked_box);
  var playerBtn = document.getElementById("svg-box-container-" + player.f.id);
  // console.log(player.f.id);
  // console.log(playerBtn);

  if (playerStatus === 2 || playerStatus === -1 || playerStatus === -5) {  //paused or  unstarted or video cued
    // player.playVideo();
    playerBtn.style.opacity = 1;
  } else if (playerStatus === 3 || playerStatus === 1) { //buffering or playing
    // player.pauseVideo();
    playerBtn.style.opacity = 0;
  }
}
function closeModule(clicked_box) {//Close Video Module

  var video = document.getElementById("small-video-" + clicked_box);
  var modal = document.getElementById("video-modal-" + clicked_box);
// console.log(player);
  modal.style.display = "none";

  // if (player)
  player.pauseVideo();

}//Close Video Module

// function playSmallVideo(clicked_box) {
//   var video = document.getElementById("small-video-" + clicked_box);
//   var playerBtn = document.getElementById("small-svg-container" + clicked_box);
//   if (video.paused == true) {
//     // Play the video
//     video.play();
//     playerBtn.style.opacity = 0;
//     triangle.style.opacity = 0;
//   } else {
//     playerBtn.style.opacity = 1;
//     triangle.style.opacity = 1;
//     video.pause(); 
//   }
// };

// 2. This code loads the IFrame Player API code asynchronously.
//   var tag = document.createElement('script');

//   tag.src = "https://www.youtube.com/iframe_api";
//   var firstScriptTag = document.getElementsByTagName('script')[0];
//   firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);
//   // 3. This function creates an <iframe> (and YouTube player)
//   //    after the API code downloads.

// var newplayer = [];
//   function onYouTubeIframeAPIReady() {

//     for (i = 0; i <= row.length; i++){
//        var player = [];
//       var videoID = row[i].field_5faa821360bbb;


//      newplayer = player = new YT.Player('player-' + i, {
//         height: '349',
//         width: '560',
//         videoId: videoID,
//         playerVars: { 'color': 'white', 'modestbranding': 1, 'rel': 0 },
//         events: {
//           'onReady': onPlayerReady,
//           'onStateChange': onPlayerStateChange
//         },

//       })

//   }}
// 4. The API will call this function when the video player is ready.


function onPlayerReady(event) {
  // playerStatus = event.target.playerInfo.playerState
  // console.log(playerStatus);
  for (i = 0; i <= row.length; i++) {

  }

}
// 5. The API calls this function when the player's state changes.
//    The function indicates that when playing a video (state=1),
//    the player should play for six seconds and then stop.







function showStories() { //Display all stories
  var stories = document.getElementsByClassName("display-none-tablet");
  var btn = document.getElementById("toggle-btn");
  for (var i = 0; i < stories.length; i++) {
    if (stories[i].style.display === "block") {
      stories[i].style.display = "none";
    } else {
      stories[i].style.display = "block";
    }
  }
  if (btn.value == "Skatīt mazāk") { //change button name
    btn.value = "Skatīt vairāk";
  } else {
    btn.value = "Skatīt mazāk"
  }

}//Display all stories

