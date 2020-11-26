<?php 

$title1 = get_field('title-1');
$title2 = get_field('title-2');



?>


<div class="select-container"> 


  <div class="select-box"> <!-- select-box-->
    <p class="regularText yellow"><?php echo $title1?></p>
    <select class="custom-select">
      <option value="0" disabled selected hidden>Izvēlies</option>
      <?php if ( have_rows('options-1')): $id = 0 ;?>
      <?php while( have_rows('options-1')):the_row(); $id++;
      $place = get_sub_field('place')  ?: 'type place here..';?>
      <option value="<?php echo $id ?>"> <?php echo $place ?>   </option>
      <?php endwhile?>
      <?php endif?> 
    </select>
  </div> <!-- select-box-->

  <div class="select-box m-none-tablet"> <!-- select-box-->
    <p class="regularText yellow"><?php echo  $title2 ?></p>
    <select onchange="changeMarkers()" class="custom-select" id="input2">
    <option value=" nothing" disabled selected hidden>Izvēlies</option>
    <?php if ( have_rows( 'optionmaker' ) ):$id = 0 ; ?>
    <?php while ( have_rows ( 'optionmaker') ) :the_row();$id++ ; 
    $type     = get_sub_field('businesstype')  ?: 'type..';
    $types[]  = get_row(); ?>

    <option value="<?php echo $type ?>"><?php echo $type ?></option>
      <?php if (have_rows('business')): ?> 
      <?php while ( have_rows ('business') ) :the_row(); 
      $businesses[] = get_row(); ?>

      <?php endwhile ?>
      <?php endif ?>
      
    <?php endwhile ?>
    <?php endif ?>

    </select>  
  </div> <!-- select-box-->
</div><!-- select-container-->

<div  class="companies-container">  <!-- companies-->
  <?php if ( have_rows( 'optionmaker' ) ):?>
  <?php while ( have_rows ( 'optionmaker') ) :the_row();
  $type     = get_sub_field('businesstype')  ?: 'type..';?> 
  <div id="<?php echo $type ?>"  class="companies">
    <?php if (have_rows('business')): ?> 
    <?php while (  have_rows ('business') ) :the_row();
    $name   = get_sub_field('name') ;
    $image  = get_sub_field('image') ;
    $number = get_sub_field('phone_number') ;
    $adress = get_sub_field('street_adress') ;
    ?>
    <div class="company-row">  
      <div class="img-container"><img src="<?php echo $image ?>" alt=""></div>
        <p id="companieName" class="regularText text-center"> <?php echo $name ?></p>
        <span class=" regularText text-right"><?php echo $number ?><br><?php echo $adress ?></span>
    </div>
    <?php endwhile ?>
  <?php endif ?>
  </div> 
  <?php endwhile ?>
  <?php endif ?>
</div><!-- companies-->

<script type='text/javascript'>
var businesses = <?php echo json_encode($businesses)  ?>; 
var types      = <?php echo json_encode($types)  ?>; 
</script>
<script type='text/javascript' src="/wp-content/themes/pandago-child/resources/js/script.js">
</script> 
<script type='text/javascript' src="/wp-content/themes/pandago-child/template-parts/blocks/map/google-maps.js">
</script> 
        <div id="map"></div>
