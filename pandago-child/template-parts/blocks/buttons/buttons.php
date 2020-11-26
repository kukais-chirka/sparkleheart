
<?php 

/* Buttons Template */



?>


<?php if(have_rows('buttons')):?>

    <div class="button-container"><!-- button-container -->
<?php while( have_rows('buttons')): the_row();

$heading              = get_sub_field('heading') ?: 'Heading Text here';   // Heading Text
$headingColor         = get_sub_field('heading_color') ?: '#212529';       // Heading Color
$buttonText           = get_sub_field('buttontext') ?: 'Button Text here'; // Button Text
$href                 = get_sub_field('link') ?: 'Your href link here'; // Button Text
$buttonTextColor      = get_sub_field('buttontextcolor') ?: '#ffffff';     // Button Text Color
$buttonHoverTextColor = get_sub_field('hovertext') ?: '#ffffff';           // Button Hover Text Color
$buttonColor          = get_sub_field('button_color') ?: '#ffa800';        // Button Background Color
$buttonHoverColor     = get_sub_field('hovercolor') ?: '#ffffff';          // Button Background Hover Color
$borderColor          = get_sub_field('border_color') ?: '#ffa800';        // Button border  Color
$hoverBorderColor     = get_sub_field('hover_border') ?: '#ffa800';        // Button border hover Color


?>
        <div class="button-box">
            <h2 class="title" style="color:<?php echo $headingColor?>"> <?php echo $heading ?> </h2>
           
            <a href="<?php echo $href ?>" class="simple-btn regularText"
                style  =    "color:<?php echo $buttonTextColor?>;
                             background-color:<?php echo $buttonColor?>;
                             border:solid 2px <?php echo $borderColor?>"
                onMouseOut= "this.style.color='<?php echo $buttonTextColor?>';
                             this.style.backgroundColor= '<?php echo $buttonColor?>'
                             this.style.border= 'solid 2px <?php echo $borderColor?>'"
                onMouseOver="this.style.color='<?php echo $buttonHoverTextColor?>';
                             this.style.backgroundColor='<?php echo $buttonHoverColor?>'
                             this.style.border= 'solid 2px <?php echo $hoverBorderColor?>'"      
            >
            <?php echo $buttonText ?>
            </a>
      
</div>
<?php endwhile;?>

    </div>  <!-- button-container -->

<?php endif;?>
