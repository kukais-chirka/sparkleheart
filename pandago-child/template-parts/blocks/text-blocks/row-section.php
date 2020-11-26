


<?php 
/* Row Section Template */
$title      = get_field('title');
$titleColor = get_field('title_color');
$textColor  = get_field('text_color');
?>



<div class="purpose-container mobile-container"><!-- purpose-container -->
    <?php if ($title) :?>
    <h4 style="color:<?php echo $titleColor ?>"><?php echo $title ?></h4>
    <?php endif ?>
        <div class="rows"> <!-- rows -->
        
    <?php if (have_rows('rows')):?> 
        <?php while( have_rows('rows')):the_row() ; 
        $image     = get_sub_field ('image') ?: '/wp-content/uploads/2020/10/sun.png';
        $text      = get_sub_field ('text'); ?>
            <div class="purpose-row"> <!-- purpose-row -->
                <div class="img-box">
                    <img src="<?php echo $image ?>" alt="Saulīte row-1">
                </div>
                <div class="text-box">
                    <p style="color:<?php echo $textColor ?>"  class="regularText"><?php echo $text ?></p>
                </div>
            </div><!-- purpose-row -->
        <?php endwhile ?>   
    <?php endif ?>
        </div> <!-- rows -->
          
</div><!-- purpose-container -->