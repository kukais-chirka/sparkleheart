<?php 
$blockType= get_field('textblocktype');
$headText = get_field('heading_text');
$headColor= get_field('heading_color');
$pBoolean = get_field('add_paragraph');
$pText    = get_field('paragraph_text');
$pColor   = get_field('paragraph_color');
$width   = get_field('width');
?>


<!-- /////////////H1  p18px/////////////////////////////-->
<?php if ($blockType === 'Head D=48px, M =36px; Paragr D=18px, M=12px'): ?>
<div style="max-width:<?php echo $width ?>px" class="ideja-container mobile-container text-center "><!-- Heading and p -->  
        <h1 style="color:<?php echo $headColor ?>"><?php echo $headText ?></h1>
        <p class="regularText" style="color:<?php echo $pColor ?>">
            <?php echo $pText?>
        </p>
</div>      <!-- ideja-container -->
<?php endif?>

<?php if ($blockType === 'Head D=48px, M =36px; Paragr none'): ?>
<div style="" class="ideja-container mobile-container text-center "><!-- ideja-container -->  
        <h1 style="color:<?php echo $headColor ?>"><?php echo $headText ?></h1>
</div>      <!-- ideja-container -->
<?php endif?>

<!-- ////////////////H1   p24px//////////////////////////-->  
<?php if ($blockType === 'Head D=48px, M =36px; Paragr D=24px, M=14px'): ?>
<div class="apply-dream-container text-center d-flex flex-column justify-content-center align-items-center"><!-- apply-dream-container -->
            <h1 style="color:<?php echo $headColor ?>" ><?php echo $headText ?></h1>
            <p class="regularText" style="color:<?php echo $pColor ?>"><?php echo $pText ?></p>
</div><!-- apply-dream-container -->
<?php endif?>

<!-- /////////////////H4   P24px Mp18px ////////////////////////-->  
<?php if ($blockType === 'Head D=40px, M =24px; Paragr D=24px, M=18px'): ?>
<div class="mission-container mobile-container text-center"><!-- mision-container-->
    <h4 style="color:<?php echo $headColor ?>"><?php echo $headText ?></h4>
    <p class="regularText" style="color:<?php echo $pColor ?>"> <?php echo $pText ?>  </p>
</div><!-- mision-container-->

<?php endif?>