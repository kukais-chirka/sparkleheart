
<?php 

/* 99-stories Template */



?>


   
<div class="margin-box mobile-container"> <!-- MarginBox -->
<div class="stories-container"> <!-- Stories Container --> 
<?php if ( have_rows('storie_maker')): $id = -1;?>
<?php while ( have_rows('storie_maker')):the_row(); $id++ ;
 $idArray[] = $id; 
 $row[]     = get_row(); 
 $haveVideo = get_sub_field('do_you_have_a_video');
 $image     = get_sub_field('story_image') ?: ''; 
 $name      = get_sub_field('author_name') ?: ''; 
 $video     = get_sub_field('video') ?:  '1PalAURGxtM'; 
 $descr     = get_sub_field('description') ?: ''; 
 ?>
    <?php if ($haveVideo): ?>
    <div onclick="openModule(<?php echo $id ?>)" class="story-box b1 relative <?php echo ($id >= 20) ?  "display-none-tablet" : '' ?>">
      <img src="<?php echo $image ?>" alt="">
      <span class="author"><?php echo $name?></span>
    <?php endif ?>  
    <?php if (!$haveVideo): ?>
    <div class="no-story relative <?php echo ($id >= 20) ?  "display-none-tablet" : '' ?>">
      <span class="new-author"><?php echo $descr?></span>
    <?php endif ?>  
      <p  class="number-text"><?php echo $id + 1?></p>
    </div>
 
    <div id="video-modal-<?php echo $id ?>" class="modal" > <!-- MODAL -->
        <div class="modal-container">
            <div class="modal-video-container mobile-container" >
                <div class="cross-container"><a onclick="closeModule(<?php echo $id ?>)">&times</a></div>
                  <div class="relative" >
                  <div class="youtube-container">
                      <div id="player-<?php echo $id ?>"></div>
                  </div>      
                  <div id="svg-box-container-player-<?php echo $id ?>" class="svg-box-container" onclick="playSmallVideo(<?php echo $id ?>)" >
                    <svg id="small-svg-box-<?php echo $id ?>" class="svg-box"  width="100" height="100">    <!-- video-pause -->
                      <circle class="circle" cx="50" cy="50" r="40" stroke="#FFA800" stroke-width="4" fill="#FFA800" />
                      <circle class="mobCircle"  cx="50" cy="50" r="25" stroke="#FFA800" stroke-width="4" fill="#FFA800" />
                      <div  id="small-triangle-<?php echo $id ?>" class="triangle" ></div><!-- video-pause -->
                    </svg>
                  </div>

                   <!-- <video onclick="playSmallVideo(<?php echo $id ?>)" class="small-video" id="small-video-<?php echo $id ?>" type="video/mp4" src="<?php echo $video ?>"></video>
                    <svg  id="small-svg-box-<?php echo $id ?>" class="svg-box" onclick="playSmallVideo(<?php echo $id ?>)" width="100" height="100">  
                      <circle class="circle" cx="50" cy="50" r="40" stroke="#FFA800" stroke-width="4" fill="#FFA800" />
                      <circle class="mobCircle"  cx="50" cy="50" r="25" stroke="#FFA800" stroke-width="4" fill="#FFA800" />
                      <div  id="small-triangle-<?php echo $id ?>" class="triangle" onclick="playSmallVideo(<?php echo $id ?>)"></div>
                    </svg> -->

                   </div>
               </div>
              <h4><?php echo $name ?></h4>
          </div>
    </div> <!-- MODAL -->
<?php endwhile?>    
<?php endif?>    
   
</div> <!-- Stories Container --> 

 <input value="Skatīt vairāk" id="toggle-btn" type="button" class="simple-btn" onclick="showStories()">
</div><!-- MarginBox -->
<script defer type='text/javascript'> 
var row = <?php echo json_encode($row)  ?>; 
</script>
<script defer type='text/javascript' src="/wp-content/themes/pandago-child/template-parts/blocks/stories/99-stories.js">
</script> 