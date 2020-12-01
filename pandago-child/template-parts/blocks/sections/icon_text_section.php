

<?php

$title      = get_field('header');
$titleColor = get_field('header_color');
?>


<div class="dream-judge-container"><!-- dream-judge-container-->
    <h4 style="color:<?php echo $titleColor?>"><?php echo $title ?></h4>
<?php if (have_rows('sections')): $Index = 0;?>
    <div class="sections">
    <?php while( have_rows('sections')):the_row(); $Index++;
    $icon      = get_sub_field('icon')  ?: '/wp-content/uploads/2020/10/speaker.png';
    $iconWidth = get_sub_field('iconwidth')  ?: '';
    $text      = get_sub_field('text')  ?: '';
    $textColor = get_sub_field('textcolor')  ?: '';
    
    $boxId = 'box-' . $block['id'] . '-' .  $Index;
    if( !empty($block['anchor']) ) {
    $boxId = $block['anchor'];
}
    $spanId = 'span-' . $block['id'] . '-' .  $Index;
    if( !empty($block['anchor']) ) {
    $spanId = $block['anchor'];
}
    ?>

        <section>
            <div id="<?php echo $boxId?>" class="icon-box">
                <img src="<?php echo $icon ?>" alt="">
            </div>
            <div class="text-box">
            <span id="<?php echo $spanId?>" class="regularText"><?php echo $text ?></span>
                </div>
        </section>

        <style type="text/css"> 
        #<?php echo $boxId ?>{
                max-width: <?php echo $iconWidth;?>px;
                }
        #<?php echo $boxId ?> img{
            max-height: <?php echo $iconHeight; ?>px ;
        }
        #<?php echo $spanId ?>   {
                color: <?php echo $textColor; ?>;
                }
        </style>   

<?php endwhile ?>
    </div>
<?php endif ?>
</div><!-- dream-judge-container-->