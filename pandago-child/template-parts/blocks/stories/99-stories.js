


// 3. This function creates an <iframe> (and YouTube player)
//    after the API code downloads.
// var player = [];
// var newplayer = [];
var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player = [];
var loadedPlayers = [];
function openModule(clicked_box) {//Open Video Module

  var modal = document.getElementById("video-modal-" + clicked_box);
  modal.style.display = "flex";
  var videoID = row[clicked_box].field_5faa821360bbb;


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
//  loadedPlayers += player.playerInfo;
// console.log(player.playerInfo[videoData]);
// console.log(player);
// console.log(loadedPlayers);
//  return createdVideoID = clicked_box;
var playerBtn = document.getElementById("svg-box-container-player-" + clicked_box);
function onPlayerReady(event) {
  // console.log('kaaka');
  // console.log(playerBtn);
  playerBtn.style.display = "flex";
  // console.log(event);
  // console.log(playerBtn);
  }
  

}//Open Video Modulee

function playSmallVideo(clicked_box) {
  var playerBtn = document.getElementById("svg-box-container-player-" + clicked_box);
  if (playerStatus === 2 || playerStatus === -1 || playerStatus === -5) {  //paused or  unstarted or video cued
    player.playVideo();
    playerBtn.style.opacity = 0;
  } else if (playerStatus === 3 || playerStatus === 1) { //buffering or playing
    player.pauseVideo();
    playerBtn.style.opacity = 1;
  }

}

// function onPlayerReady(event) {

//   }

var playerStatus = 2;
function onPlayerStateChange(event) {
  playerStatus = event.data;

  var playerid = (player.o.id);
  var playerBtn = document.getElementById("svg-box-container-" + playerid);

  if (playerStatus === 2 || playerStatus === -1 || playerStatus === -5) {  //paused or  unstarted or video cued
    playerBtn.style.opacity = 1;
  } else if (playerStatus === 3 || playerStatus === 1) { //buffering or playing
    playerBtn.style.opacity = 0;
  }

}

function closeModule(clicked_box) {//Close Video Module
  var playerBtn = document.getElementById("svg-box-container-player-" + clicked_box);
  var video = document.getElementById("small-video-" + clicked_box);
  var modal = document.getElementById("video-modal-" + clicked_box);
  modal.style.display = "none";
  player.destroy();
  playerBtn.style.display = "none";
  playerBtn.style.opacity = 1;
}//Close Video Module



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

