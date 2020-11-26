<?php
        /* Sponsor Block Template */


$title           = get_field('title') ?: 'Title text heres ...';             // Button Text
$backgroundColor = get_field('backgroundcolor') ?: 'Background Block color'; // Button Text
$vectorTop       = get_field('vectortop') ?: 'VectorTopColor';

?> 
<div class="sponsorContainer text-center relative " style="background-color: <?php echo $backgroundColor?> "><!--sponsorContainer-->
    <img class="vector-top" src="<?php echo $vectorTop?>" alt="Apgrauztā Mala">
    <h3> <?php echo $title?> </h3>
        <div class="imgRow">
        <?php if ( have_rows('images')):?>
           <?php while( have_rows('images')): the_row();
            $sponsorImage  = get_sub_field('sponsorimage') ?: 'Image here'; ?> 

            <div><img id="spons1" src="<?php echo $sponsorImage?>" alt="Sponsora Bilde"></div>
            <?php endwhile;?>
        <?php endif;?>
        </div>
</div> <!--sponsorContainer-->