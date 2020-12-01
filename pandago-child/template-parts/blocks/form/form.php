 
<?php
        /* Form Template */

$title                = get_field('title') ?: '';          // Title
$titleColor           = get_field('titlecolor') ?: 'Color Here';           // Title Color
$bgColor              = get_field('inputbackgroundcolor') ?: 'Color here'; // Input Background Color
$placeHolderColor     = get_field('placeholdercolor') ?: 'Color here';     // Place Holder text Color
$fontColor            = get_field('fontcolor') ?: 'Color here';            // Text color
$checkMarkColor       = get_field('checkmarkcolor') ?: 'Color here';       // Checkbox background color

$buttonText           = get_field('buttontext') ?: 'Button Text here'; // Button Text
$buttonTextColor      = get_field('buttontextcolor') ?: '#ffffff';     // Button Text Color
$buttonHoverTextColor = get_field('hovertext') ?: '#ffffff';           // Button Hover Text Color
$buttonColor          = get_field('button_color') ?: '#ffa800';        // Button Background Color
$buttonHoverColor     = get_field('hovercolor') ?: '#ffffff';          // Button Background Hover Color
$borderColor          = get_field('border_color') ?: '#ffa800';        // Button border  Color
$hoverBorderColor     = get_field('hover_border') ?: '#ffa800';        // Button border hover Color

?> 

        <!-- form-container -->
        <div class="formContainer">
        <?php if ($title) : ?>
             <h4 style="color:<?php echo $titleColor ?>"><?php echo $title ?></h4>
        <?php endif ?>
           <div class="formStart text-left mobile-container"> <!-- FormStart -->
               <!-- <img src="/assets/img/stars.png" alt=""> -->
               <form id="form" onsubmit="submitForm();return false"> <!-- FormInputs -->
                   <div class="d-sm-flex">

                    <?php if ( have_rows('inputtype#1_row')):?>  <!-- FLEX INPUT FIELD -->
                        <?php while( have_rows('inputtype#1_row')): the_row();
                        $placeHolder1 = get_sub_field('placeholder#1') ?: 'Place Holder Heresss'; ?>

                       <input type="text" class="textInput " id="name" name="name" placeholder="<?php echo $placeHolder1 ?>*" required> <!-- NameInput -->
                        
                       <?php endwhile;?>
                    <?php endif;?>
                   </div>

                    <?php if (have_rows('inputtype#2_full-width')):?>  <!-- FUll WIDTH FORMS -->
                       <?php while( have_rows('inputtype#2_full-width')): the_row();
                       $placeHolder2 = get_sub_field('placeholder#2') ?: 'Place Holder Here'; ?>

                        <input type="text" class="textInput" id="phone" name="phone" placeholder="<?php echo $placeHolder2 ?>*" required><!-- Phone -->

                       <?php endwhile;?>
                    <?php endif;?>

                    <?php if (have_rows('inputtype#3_textarea')):?> <!-- TEXTAREA -->
                       <?php while( have_rows('inputtype#3_textarea')): the_row();
                        $placeHolder3 = get_sub_field('placeholder#3') ?: 'Place Holder Here';
                        $height = get_sub_field('height_rows') ?: 'Place Holder Here';?>

                   <textarea rows="<?php echo $height ?>" class="textInput" id="message" name="message" placeholder="<?php echo $placeHolder3 ?>" required></textarea><!-- Q or Comment -->

                       <?php endwhile;?>
                    <?php endif;?>

                   <span class="obligation text" id="obligation">*obligāti aizpildāmie lauki</span>
       
                   <div class="acceptTerms" id="acceptTerms"> <!-- Terms -->
                       <div class="checkbox-container">
                           <input class="checkbox" id="checkbox" type="checkbox" required>
                           <span class="checkmark" ></span>
                       </div>  
                       <p class="regularText text"> Piekrītu, ka mani dati tiks izmantoti likumdošanā noteiktā kārtībā un
                           tiks saglabāti līdz brīdim, kamēr tas būs nepieciešams.</p>
                   </div> <!-- Terms -->
                   <div class="text-center">
                       <button href="#" id="formBtn" class="button simple-btn regularText" 
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
            <?php echo $buttonText ?></button>
                       <div id="thank-you">
                           <span class="mediumText">Paldies, ka sapņo</span>
                           <p class="regularText">Ja Tavs sapnis tiks izvēlēts, mēs ar Tevi sazināsimies.</p>
                       </div>
                   </div>
               </form>
           </div>
           <style>
       .textInput{
           background: <?php echo $bgColor?>!important;      /* Input Bg Color*/
           color: <?php echo $fontColor?>!important  ;       /* Input Font Color*/
       }
       .textInput::placeholder {
           color:<?php echo $placeHolderColor?>!important;}  /* Input Placeholder Color*/
       
        .text{color: <?php echo $fontColor?>!important;}     /* Input Font Color*/ 

        input[type=checkbox]:checked + .checkmark {
              background-color: <?php echo $checkMarkColor?>;} /* checkMark Color*/ 
       </style>
        
       </div> <!--formContainer-->