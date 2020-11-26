<?php 

/* Gallery Template */
$className = 'Custom-Gallery';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$img1  = get_field('img_1') ?: '/wp-content/uploads/2020/10/Zanda_1.jpg'; 
$img2  = get_field('img_2') ?: '/wp-content/uploads/2020/10/Sibilla_4.jpg'; 
$img3  = get_field('img_3') ?: '/wp-content/uploads/2020/10/Brinuma_meita-15.jpg'; 
$img4  = get_field('img_4') ?: '/wp-content/uploads/2020/10/Alina_1_1.jpg'; 
$img5  = get_field('img_5') ?: '/wp-content/uploads/2020/10/Anda_2_1.jpg'; 

?>





<div class="gallery-container-1 relative"><!-- Gallery Container -->
    <img class="vector-top" src="/wp-content/uploads/2020/10/Vector.png" alt="Apgrauztā Mala">
    <img class="vector-top-mobile" src="/wp-content/uploads/2020/10/mobile_vector_top.png" alt="Apgrauztā Mala"> 
             
    <div class="d-flex">
        <img class="img1" src="<?php echo $img1 ?>" alt="Galerijas Bilde#1">
        <img class="img2 " src="<?php echo $img2 ?>" alt="Galerijas Bilde#2">
    </div>

    <div class="d-flex ">
        <div class="flex-column-container">
            <img class="img3" src="<?php echo $img3 ?>" alt="Galerijas Bilde#3">
            <img class="img4" src="<?php echo $img4 ?>" alt="Galerijas Bilde#4">
        </div>
            <img class="img5" src="<?php echo $img5 ?>" alt="Galerijas Bilde#5">
        </div>

    <img class="vector-bot" src="/wp-content/uploads/2020/10/vector_2.png" alt="Apgrauztā Mala">
    <img class="vector-bot-mobile" src="/wp-content/uploads/2020/10/mobile_vector_bot.png" alt="Apgrauztā Mala">
</div><!-- Gallery Container -->
