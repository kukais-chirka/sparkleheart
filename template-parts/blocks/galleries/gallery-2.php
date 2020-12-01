<?php 

/* Gallery Template */
$className = 'Custom-Gallery';
if( !empty($block['className']) ) {
    $className .= ' ' . $block['className'];
}
if( !empty($block['align']) ) {
    $className .= ' align' . $block['align'];
}

$img1  = get_field('img1') ?: 'Picture #1'; 
$img2  = get_field('img2') ?: 'Picture #2'; 
$img3  = get_field('img3') ?: 'Picture #3'; 
$img4  = get_field('img4') ?: 'Picture #4'; 
$img5  = get_field('img5') ?: 'Picture #5'; 

?>





<div class="gallery-container-2 d-flex relative"><!-- Gallery Container -->
    <img class="vector-top" src="/wp-content/uploads/2020/10/Vector.png" alt="Apgrauztā Mala">
    <img class="vector-top-mobile" src="/wp-content/uploads/2020/10/mobile_vector_top.png" alt="Apgrauztā Mala"> 
             
    <div class="d-flex flex-fill box-1">
            <div class="flex-fill  img6"><img  src="<?php echo $img1 ?>" alt="Meitene ar vijoli"></div>
            
            <div class="d-flex img7 flex-fill flex-column  ">
                <img src="<?php echo $img2 ?>" alt="Trīs cilvēki">
                <img src="<?php echo $img3 ?>" alt="Meitene iet pa mežu">
            </div>
        </div>
        <div class="d-flex flex-fill  box-2">
            <img class="img9" src="<?php echo $img4 ?>" alt="Meitene ar kroni">
            <img class="img10" src="<?php echo $img5 ?>" alt="Trīs cilvēki un cepure vienam">
        </div>
    <img class="vector-bot" src="/wp-content/uploads/2020/10/Vector_2.png" alt="Apgrauztā Mala">
    <img class="vector-bot-mobile" src="/wp-content/uploads/2020/10/mobile_vector_bot.png" alt="Apgrauztā Mala">
</div><!-- Gallery Container -->
