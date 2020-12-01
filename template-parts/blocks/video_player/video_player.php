<?php 

/* Video Player Template */

$video  = get_field('video_url') ?: '/wp-content/uploads/2020/11/video.mp4'; 
$stroke = get_field('stroke_color') ?: '#FFA800'; 
$fill   = get_field('fill_color') ?: '#FFA800'; 

?>

<div class="video-container relative" style="background:black">  <!-- Video-container -->
    <!-- <img src="/assets/img/SparkleVideo1.png" alt=""> -->
    <video onclick="playVideo()" class="big-video" id="big-video" type="video/mp4" src= "<?php echo $video ?>" ></video>
        <svg onclick="playVideo()" id="svg-box" class="svg-box" width="100" height="100">    <!-- video-pause -->
            <circle  class="circle" cx="50" cy="50" r="40" stroke="<?php echo $stroke ?>" stroke-width="4" fill="<?php echo $fill ?>" />
            <circle class="mobCircle" cx="50" cy="50" r="25" stroke="<?php echo $stroke ?>" stroke-width="4" fill="<?php echo $fill ?>" />
            <div onclick="playVideo()" id="triangle" class="triangle"></div><!-- video-pause -->
        </svg>
</div> <!-- Video-container -->