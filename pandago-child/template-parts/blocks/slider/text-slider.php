

<?php /* Text Slider Template */?>



<div class="slider-container mobile-container text-left"> 
    <div class="carousel relative">
        <div id="slider" class="slider">

        <?php if(have_rows('slide')):?>
            <?php while( have_rows('slide')): the_row();
             $authorName       = get_sub_field('authorname') ?: '';
             $description      = get_sub_field('description') ?: '';
             $quote            = get_sub_field('quote') ?: '';
             $authorColor      = get_sub_field('authorcolor') ?: '';
             $descriptionColor = get_sub_field('descriptioncolor') ?: '';
             $quoteColor       = get_sub_field('quotecolor') ?: '';
             ?>

            <div class="slide">  
                <div class="slide-box d-flex flex-column">
                <?php if ($authorName) : ?>
                    <h3 style="color:<?php echo $authorColor ?>"><?php echo $authorName ?></h3>
                <?php endif ?>    
                <?php if ($description) : ?>
                    <span class="regularText" style="color:<?php echo $descriptionColor ?>"><?php echo $description ?></span>
                <?php endif ?>
                    <div class="comment">
                    <?php if ($quote) : ?>
                        <p class="regularText" style="color:<?php echo $quoteColor ?>"><?php echo $quote ?></p>
                        <?php endif ?>
                    </div>
                </div>
            </div> 

            <?php endwhile?>
        <?php endif?>
        </div>
        <div class="controls"> 
            <div class="arrow-container d-flex">
                <div><img class="left" id="left" style="opacity: 0.4;" src="/wp-content/uploads/2020/10/Poga-_left.png" alt="Bulta pa kreisi"></div>
                <div><img class="right" id="right" src="/wp-content/uploads/2020/10/Poga-_right.png" alt="Bulta pa labi"></div>
            </div>
        </div>
    </div>
    <script defer type='text/javascript' src="/wp-content/themes/pandago-child/template-parts/blocks/slider/text-slider.js">
</script> 
</div> <!-- slider-container  -->