<?php 

/* Video Player Template */

$text  = get_field('text') ?: 'Type text here ...';  //Text 
$color = get_field('text-color') ?: 'Type text here ...'; //Color for text

?>

<div class="textBox mobile-container d-flex"> <!-- textBox -->
    <span style="color:<?php echo $color ?>" class="regularText">
    <?php echo $text ?>
        </span>
</div><!-- textBox -->