


<?php if (have_rows('section')): $Index = 0;?>
<div class="what-dream-container mobile-container d-flex justify-content-around">  <!-- what-dream-container -->

<?php while( have_rows('section')):the_row(); $Index++ ; 

$image                = get_sub_field('image') ?: '/wp-content/uploads/2020/10/dream_1.png';   // Image
$header               = get_sub_field('header') ?: 'header Text here';     // Heading text
$headerColor          = get_sub_field('headercolor') ?: '#212529';         // Heading Color
$text                 = get_sub_field('text') ?: 'Text here';              // Text
$textColor            = get_sub_field('textcolor') ?: '';                  // Text COlor
$buttonText           = get_sub_field('buttontext') ?: 'Button Text here'; // Button Text
$buttonTextColor      = get_sub_field('btntextcolor') ?: '#ffffff';        // Button Text Color
$buttonHoverTextColor = get_sub_field('hovertext') ?: '#ffffff';           // Button Hover Text Color
$buttonColor          = get_sub_field('buttoncolor') ?: '#ffa800';         // Button Background Color
$buttonHoverColor     = get_sub_field('hovercolor') ?: '#ffffff';          // Button Background Hover Color
$borderColor          = get_sub_field('bordercolor') ?: '#ffa800';         // Button border  Color
$hoverBorderColor     = get_sub_field('borderhover') ?: '#ffa800';         // Button border hover Color
// Create id attribute allowing for custom "anchor" value.
$headerID = 'header-' . $block['id'] . '-' .  $Index;
if( !empty($block['anchor']) ) {
    $headerID = $block['anchor'];
}
$paragraphID = 'p-' . $block['id'] . '-' .  $Index;
if( !empty($block['anchor']) ) {
    $paragraphID = $block['anchor'];
}
$btnID = 'button-' . $block['id'] . '-' .  $Index;
if( !empty($block['anchor']) ) {
    $btnID = $block['anchor'];
}
?>

    <div class="dream-box"> <!-- dream-box -->
        <div class="img-box"><!-- img-box -->
            <img src="<?php echo $image?>" alt="Bilde">
        </div><!-- img-box -->
        <div class="text-box"><!-- text-box -->
            <h2 id="<?php echo esc_attr($headerID); ?>" class="title-mobile"><?php echo $header ?></h2>
            <p id="<?php echo esc_attr($paragraphID); ?>" class="regularText regularText-mobile"><?php echo $text?></p>
        </div><!-- text-box -->
        <button id="<?php echo esc_attr($btnID); ?>" class="simple-btn regularText"><?php echo $buttonText ?></button>
    </div><!-- dream-box -->

<style type="text/css"> 

#<?php echo $headerID ?>{color: <?php echo $headerColor; ?>;}
#<?php echo $paragraphID ?>{color: <?php echo $textColor; ?>;}

#<?php echo $btnID; ?>{
    color: <?php echo $buttonTextColor; ?>;
    background-color: <?php echo $buttonColor; ?>;
    border: solid 2px <?php echo $borderColor; ?>;
}
#<?php echo $btnID; ?>:hover{
    color:<?php echo $buttonHoverTextColor; ?>;
    background-color: <?php echo $buttonHoverColor; ?>;
    border: solid 2px <?php echo $hoverBorderColor; ?>;
}
</style>    
<?php endwhile?>    
</div><!-- what-dream-container -->
<?php endif?>


