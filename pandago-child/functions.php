<?php

define( 'TD', 'pandago-child' );

// function admin_bar(){ // show admin bar on page

//   if(is_user_logged_in()){
//     add_filter( 'show_admin_bar', '__return_true' , 1000 );
//   }
// }
// add_action('init', 'admin_bar' );




function add_defer_forscript($url)
{
    if (strpos($url, '#deferload')===false)
        return $url;
    else if (is_admin())
        return str_replace('#deferload', '', $url);
    else
        return str_replace('#deferload', '', $url)."' defer='defer"; 
}
add_filter('clean_url', 'add_defer_forscript', 11, 1);

// add_filter( 'clean_url', function( $url )
// {
//     if ( FALSE === strpos( $url, '.js' ) )
//     { // not our file
//         return $url;
//     }
//     // Must be a ', not "!
//     return "$url' defer='defer";
// }, 11, 1 );




add_action('wp_enqueue_scripts', "sparkle_project_scripts_include");

function sparkle_project_scripts_include(){
  wp_enqueue_script( 'google_script', 'https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js');
  wp_enqueue_script(  'google_api', 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA9mz10oVEkL2zyH-FtC_9rHIj1RzNQNOA&callback=initMap#deferload');
  wp_enqueue_style('bootstrap_style', 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css');
    wp_enqueue_style (  'child-style',  get_stylesheet_directory_uri() . '/assets/css/style.css');
//   wp_enqueue_script (  'child-script', get_stylesheet_directory_uri() . '/assets/theme.js');
//   wp_enqueue_script (  'child-scripts', get_stylesheet_directory_uri() . '/resources/scss/style.css');
//   wp_enqueue_script('scripts_theme', get_stylesheet_directory_uri() . '/assets/theme.js',   array(), '20151215', true);
  wp_enqueue_script('scripts_theme', get_stylesheet_directory_uri() .'/resources/js/script.js');
  // wp_enqueue_script('scripts_themes', get_stylesheet_directory_uri() .'/resources/theme.js',   array(), '201512235', true);
}





function register_theme_nav() { 
  register_nav_menus(
    array(
      'header-nav'  => __( 'Header Navigation', TD ),
      'sidebar-nav' => __( 'Sidebar Navigation', TD )
    )
  );
}


add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() { 

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a testimonial block.
        acf_register_block_type(array(    // Video Player
            'name'              => 'Video Player',              
            'title'             => __('Video-Player'),
            'description'       => __('A custom Video_Player block.'),
            'render_template'   => 'template-parts/blocks/video_player/video_player.php',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'video', 'video Player', 'Sparkle Heart' ),
            'enqueue_style'     => 'https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css',
        ));
        acf_register_block_type(array(   // Text-Block
            'name'              => 'Text-Block',
            'title'             => __('Text-Block'),
            'description'       => __('A custom Text-Block with no heading.'),
            'render_template'   => 'template-parts/blocks/text-blocks/text-block.php',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'text', 'block', 'text-block','Sparkle Heart' ),
            'enqueue_style'     => get_stylesheet_directory_uri() . '/resources/scss/style.css',
    
        ));
        acf_register_block_type(array(     // Gallery-type-1
            'name'              => 'Gallery-1',
            'title'             => __('Custom-Gallery-1'),
            'description'       => __('A custom Gallery.'),
            'render_template'   => 'template-parts/blocks/galleries/gallery-1.php',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'gallery', 'pictures','Sparkle Heart' ),

        ));
        acf_register_block_type(array(     // Gallery-type-2
            'name'              => 'Gallery-2',
            'title'             => __('Custom-Gallery-2'),
            'description'       => __('A custom Gallery.'),
            'render_template'   => 'template-parts/blocks/galleries/gallery-2.php',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'gallery', 'pictures','Sparkle Heart' ),

        ));
        acf_register_block_type(array(   // Button Block
            'name'              => 'Button Block',
            'title'             => __('Button-Block'),
            'description'       => __('Two buttons with text'),
            'render_template'   => 'template-parts/blocks/buttons/buttons.php',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'button', 'block', 'button block','Sparkle Heart' ),
          
        ));
        acf_register_block_type(array(   // Custom Form
            'name'              => 'Custom Form',
            'title'             => __('Custom-Form'),
            'description'       => __('SparkleHeart Form'),
            'render_template'   => 'template-parts/blocks/form/form.php',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'form', 'custom', 'form block', 'Sparkle Heart'),
          
        ));
        acf_register_block_type(array(   // Custom Sponsor Container
            'name'              => 'Sponsor Block',
            'title'             => __('Sponsor-Block'),
            'description'       => __('Custom Sponsor Blockwith background color'),
            'render_template'   => 'template-parts/blocks/big-blocks/sponsor_block.php',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'Sponsor', 'block', 'Sponsor Block','Sparkle Heart' ),
          
        ));
        acf_register_block_type(array(   // Block with BG color and text, icon
            'name'              => 'Big Color Block',
            'title'             => __('Big Color Block'),
            'description'       => __('Big block with bg color, image and text'),
            'render_template'   => 'template-parts/blocks/big-blocks/color-block.php',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'Big Color Block', 'Sparkle Heart' ),
        ));
        acf_register_block_type(array(   // Big Picture With Text
            'name'              => 'Big Picture With Text',
            'title'             => __('Big-Picture-With-Text'),
            'description'       => __('Background Image with Text'),
            'render_template'   => 'template-parts/blocks/galleries/picture-with-text.php',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'Picture', 'Big', 'Picture with text', 'Sparkle Heart' ),
          
        ));
        acf_register_block_type(array(   // Text Slider
            'name'              => 'Slider /w buttons and text',
            'title'             => __('Text Slider'),
            'description'       => __('Slider for text, with buttons'),
            'render_template'   => 'template-parts/blocks/slider/text-slider.php',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'slider', 'text', 'Text Slider', 'Sparkle Heart' ),
            // 'enqueue_script'    => get_template_directory() . '/resources/js/script.js', //Tried to implement script to slider
            // 'enqueue_assets'    => 'slider_assets', //Tried to implement script to slider
        ));
        // acf_register_block_type(array(   // Header and SubHeader
        //     'name'              => 'Header_SubHeader',
        //     'title'             => __('Header-SubHeader'),
        //     'description'       => __('Text block with header and SubHeader'),
        //     'render_template'   => 'template-parts/blocks/text-blocks/header_subHeader.php',
        //     'category'          => 'formatting',
        //     'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
        //     'keywords'          => array( 'Header', 'SubHeader', 'Sparkle Heart' ),
        // ));
        acf_register_block_type(array(   // Section with Icon and Button 
            'name'              => 'Section with button and Image',
            'title'             => __('Section-Img-button'),
            'description'       => __('Block with Icon, header, text and button'),
            'render_template'   => 'template-parts/blocks/buttons/section.php',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'Section with button and Image', 'Sparkle Heart' ),
        ));
        acf_register_block_type(array(   // Section with Icon and Text 
            'name'              => 'Section with Icon and text',
            'title'             => __('Section-Icon-Text'),
            'description'       => __('Block with Icon and Text'),
            'render_template'   => 'template-parts/blocks/sections/icon_text_section.php',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'Section with Icon and text', 'Sparkle Heart' ),
        ));
        acf_register_block_type(array(   // Rows With Icon
            'name'              => 'row-section',
            'title'             => __('row-section'),
            'description'       => __('Section with rows, icon and text'),
            'render_template'   => 'template-parts/blocks/text-blocks/row-section.php',
            'category'          => 'formatting',
            'enqueue_script'    => 'https://maps.googleapis.com/maps/api/js?key=AIzaSyA9mz10oVEkL2zyH-FtC_9rHIj1RzNQNOA&callback=initMap#deferload',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'row-section', 'Sparkle Heart' ),

        ));
        acf_register_block_type(array(   // Dropdowns with map
            'name'              => 'map-with-dropdowns',
            'title'             => __('map-dropdowns'),
            'description'       => __('Dropdowns with map'),
            'render_template'   => get_stylesheet_directory() . '/template-parts/blocks/map/google-map.php',
            // 'enqueue_script'    => 'template-parts/blocks/map/google-maps.js',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'map-dropdowns', 'Sparkle Heart' ),
        ));
        acf_register_block_type(array(   // 99-stories
            'name'              => 'stories-99',
            'title'             => __('99-stories'),
            'description'       => __('99 stories'),
            'render_template'   => get_stylesheet_directory() . '/template-parts/blocks/stories/99-stories.php',
            // 'enqueue_script'    => 'template-parts/blocks/stories/99-stories.js',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'stories','99 stories', 'Sparkle Heart' ),
        ));
        acf_register_block_type(array(   // Team Block
            'name'              => 'Sparkle Team',
            'title'             => __('Sparkle-Team'),
            'description'       => __('Block for SparkleHeart Team'),
            'render_template'   => get_stylesheet_directory() . '/template-parts/blocks/team/team.php',
            // 'enqueue_script'    => 'template-parts/blocks/stories/99-stories.js',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'sparkle','team', 'Sparkle Heart' ),
        ));
        acf_register_block_type(array(   // Text Block
            'name'              => 'Headings and text block',
            'title'             => __('Headings-and-text-block'),
            'description'       => __('Block with different type of headings and texts '),
            'render_template'   => get_stylesheet_directory() . '/template-parts/blocks/text-blocks/multiHeading.php',
            // 'enqueue_script'    => 'template-parts/blocks/stories/99-stories.js',
            'category'          => 'formatting',
            'icon'              => file_get_contents( get_template_directory() . '/assets/svg/logo.svg' ),
            'keywords'          => array( 'Headings and text block', 'Sparkle Heart' ),
        ));
    }
}

/**
 * Set the theme colors
 */
add_action( 'after_setup_theme', 'prefix_register_colors' );
function prefix_register_colors() {
	add_theme_support(
		'editor-color-palette', array(

			array(
				'name'  => esc_html__( 'Black', 'prefix_textdomain' ),
				'slug' => 'black',
				'color' => '#212529',
			),
			array(
				'name'  => esc_html__( 'Blue', 'prefix_textdomain' ),
				'slug' => 'blue',
				'color' => '#2f4858',
			),
			array(
				'name'  => esc_html__( 'Orange', 'prefix_textdomain' ),
				'slug' => 'orange',
				'color' => '#ffa800',
			),
			array(
				'name'  => esc_html__( 'Yellow', 'prefix_textdomain' ),
				'slug' => 'yellow',
				'color' => '#ffcb66',
			),
			array(
				'name'  => esc_html__( 'White', 'prefix_textdomain' ),
				'slug' => 'white',
				'color' => '#fffff',
			),
		)
	);
}

/**
 * Get the colors formatted for use with Iris, Automattic's color picker
 */
function output_the_colors() {
	
	// get the colors
    $color_palette = current( (array) get_theme_support( 'editor-color-palette' ) );

	// bail if there aren't any colors found
	if ( !$color_palette )
		return;

	// output begins
	ob_start();

	// output the names in a string
	echo '[';
		foreach ( $color_palette as $color ) {
			echo "'" . $color['color'] . "', ";
		}
	echo ']';
    
    return ob_get_clean();

}
/**
 * Add the colors into Iris
 */
add_action( 'acf/input/admin_footer', 'gutenberg_sections_register_acf_color_palette' );
function gutenberg_sections_register_acf_color_palette() {

    $color_palette = output_the_colors();
    if ( !$color_palette )
        return;
?>
    <script type="text/javascript">
        (function( $ ) {
            acf.add_filter( 'color_picker_args', function( args, $field ){

                // add the hexadecimal codes here for the colors you want to appear as swatches
                args.palettes = <?php echo $color_palette; ?>

                // return colors
                return args;

            });
        })(jQuery);
    </script>
    <?php

}