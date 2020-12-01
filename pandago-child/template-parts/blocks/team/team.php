

<?php // Template for SparkleHeart 
$heading = get_field('heading');
$text    = get_field('text');
?> 


<div class="team-container mobile-container"><!-- team-container -->
          <div class="title-container">
            <h4><?php echo $heading?></h4>
            <p class="regularText"><?php echo $text?>
            </p>
          </div> 
          <?php if (have_rows('teammaker')) : $id = 0?>
          <div class="team justify-content-center align-items-center "><!-- team -->
         
          <?php while (have_rows('teammaker')): the_row(); $id++;
          $descr  = get_sub_field('member_description');
          $name = get_sub_field('member_name');
          $image = get_sub_field('member_image') ?: '/wp-content/uploads/2020/10/member_1.png';
          ?>
            <div class="team-member tm-<?php echo $id ?>"> <!-- team-member -->
              <section>
                <h5 class="member-name"><?php echo $name ?></h5>
                <span class="regularText"> <?php echo $descr ?> </span>
              </section>
            </div><!-- team-member -->

<style> 

.tm-<?php echo $id ?>{
    background-image: linear-gradient(0deg, rgba(47, 72, 88, 0.8) 18.63%, rgba(47, 72, 88, 0) 49.21%), url(<?php echo $image?>);
}
.tm-<?php echo $id ?>:hover{
    background-image:linear-gradient(0deg, rgba(47, 72, 88, 0.8) 18.63%, rgba(47, 72, 88, 0) 49.21%),
    url(<?php echo $image?>);
}
</style>

            <?php endwhile?>
          </div><!-- team -->
          <?php endif?>
        </div><!-- team-container -->