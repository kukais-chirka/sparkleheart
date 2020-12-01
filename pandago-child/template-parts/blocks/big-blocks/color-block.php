<?php
        /* Big Color Block Template with Icon and Text  */


$bgImage    = get_field('background_image') ?: '/wp-content/uploads/2020/11/yellow_background.png'; // Bg Image           
$image      = get_field('image') ?: '/wp-content/uploads/2020/11/world_peace.png'; // Image above text
$imageWidth = get_field('image_width') ?: ''; //  imagw max width
$text       = get_field('text') ?: 'text here'; //  Text
$textColor  = get_field('text_color') ?: ''; // Text color
$width      = get_field('width'); // Max-width of text

?> 
<div style="background-image:url(<?php echo $bgImage ?>)" class="yellow-container text-center d-flex flex-column align-items-center"><!-- yellow-container-->
    <div class="img-box" style="max-width:<?php echo $imageWidth ?>px">
       <img src="<?php echo $image ?>" alt="">
    </div>
    <p style="color: <?php echo $textColor ?>; max-width: <?php echo $width ?>px;" class="regularText t1"><?php echo $text ?></p>
 
</div><!-- yellow-container-->