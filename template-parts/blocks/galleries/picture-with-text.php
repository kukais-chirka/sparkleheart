<?php 

/* Picture With Text */

$image     = get_field('image') ?: 'Your Image Here'; 
$vectorTop = get_field('vectortop') ?: 'Your vector Here'; 
$vectorBot = get_field('vectorbot') ?: 'Your vector Here'; 

?>

<div class="big-picture-container" style="background-image:url(<?php echo $image ?>)"><!-- big-picture-container -->
<div class="linear-bg relative">
    <img class="vector-top" src="<?php echo $vectorTop ?>" alt="Apgrauztā Mala">

<?php if(have_rows('text')):?>
    <div class="text-container">
     <?php while( have_rows('text')): the_row();
     $text      = get_sub_field('text') ?: 'Your Text here';
     $textColor = get_sub_field('textcolor') ?: 'Your Color here';?>
        
        <h3 style="color:<?php echo $textColor ?>"> <?php echo $text  ?>
        </h3>
  <?php endwhile?>  
 </div>
    
<?php endif?>

        <img class="vector-bot" src="<?php echo $vectorBot ?>" alt="Apgrauztā Mala"> 
</div>
</div> <!-- big-picture-container -->