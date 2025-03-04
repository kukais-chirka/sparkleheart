<?php
/**
 * Adds 'Theme Options' page in admin area.
 * 
 * @since 1.0.0
 */
if ( function_exists( 'acf_add_options_page' ) ) {
  if ( ! function_exists( 'pandago_theme_options' ) ) {
    acf_add_options_page( 'Theme Options' ); 
  }
}

if( function_exists('acf_add_local_field_group') ):

  acf_add_local_field_group(array(
    'key' => 'group_5ce8e637c7231',
    'title' => 'Theme Options',
    'fields' => array(
      array(
        'key' => 'field_5ddbd634620f7',
        'label' => 'General',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'left',
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_5ddbd642620f8',
        'label' => 'Contact Form ID',
        'name' => 'general_contact_form_id',
        'type' => 'text',
        'instructions' => 'Main contact form ID or shortcode. This is used to get form messages for JavaScript validation on \'blur\' event. <br> You can also get value of this field with \'general_contact_form_id\'',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5ce8e64548ffa',
        'label' => 'Cookies',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'left',
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_5ce8e68148ffb',
        'label' => 'Position',
        'name' => 'cookies_position',
        'type' => 'select',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'bottom-right' => 'Bottom Right',
          'bottom-left' => 'Bottom Left',
        ),
        'default_value' => array(
          0 => 'bottom-right',
        ),
        'allow_null' => 0,
        'multiple' => 0,
        'ui' => 0,
        'return_format' => 'value',
        'ajax' => 0,
        'placeholder' => '',
      ),
      array(
        'key' => 'field_5ce8e6bc48ffc',
        'label' => 'Message',
        'name' => 'cookies_message',
        'type' => 'textarea',
        'instructions' => 'Set custom message to display instead of the default one.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'maxlength' => '',
        'rows' => 4,
        'new_lines' => 'br',
      ),
      array(
        'key' => 'field_5ce8e70548ffd',
        'label' => 'Allow',
        'name' => 'cookies_allow',
        'type' => 'text',
        'instructions' => 'Set custom text for "Allow" button.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '33.33',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5ce8e74c48fff',
        'label' => 'Deny',
        'name' => 'cookies_deny',
        'type' => 'text',
        'instructions' => 'Set custom text for "Deny" button.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '33.33',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5ce8e76f7685d',
        'label' => 'Learn More',
        'name' => 'cookies_learn_more',
        'type' => 'text',
        'instructions' => 'Set custom text for "Learn More" link.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '33.33',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5ce8e7907685e',
        'label' => 'Privacy Policy',
        'name' => 'cookies_link',
        'type' => 'url',
        'instructions' => 'Link to privacy policy page.',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
      ),
      array(
        'key' => 'field_5db92ae3ed9bc',
        'label' => 'JavaScript Plugins',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'left',
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_5db92afced9bd',
        'label' => 'Fancybox',
        'name' => 'js_plg_fancybox',
        'type' => 'true_false',
        'instructions' => 'Link: <a href="http://fancyapps.com/fancybox/3/" target="_blank">http://fancyapps.com/fancybox/3/</a><br>Version: 3.5.7',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_5db92b13ed9be',
        'label' => 'Slick Slider',
        'name' => 'js_plg_slick_slider',
        'type' => 'true_false',
        'instructions' => 'Link: <a href="https://kenwheeler.github.io/slick" target="_blank">https://kenwheeler.github.io/slick/</a><br>Version: 1.8.1',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_js_plg_datepicker',
        'label' => 'Datepicker',
        'name' => 'js_plg_datepicker',
        'type' => 'true_false',
        'instructions' => 'Link: <a href="https://api.jqueryui.com/datepicker/" target="_blank">https://api.jqueryui.com/datepicker/</a><br>Version: 1.12.1',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_5db92b43396f3',
        'label' => 'NiceScroll',
        'name' => 'js_plg_nicescroll',
        'type' => 'true_false',
        'instructions' => 'Link: <a href="https://nicescroll.areaaperta.com/" target="_blank">https://nicescroll.areaaperta.com/</a><br>Version: 3.7.6',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_5db92c6b7adf8',
        'label' => 'SumoSelect',
        'name' => 'js_plg_sumoselect',
        'type' => 'true_false',
        'instructions' => 'Link: <a href="https://github.com/HemantNegi/jquery.sumoselect" target="_blank">https://github.com/HemantNegi/jquery.sumoselect</a><br>Version: 3.0.2',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_5db92e68c568d',
        'label' => 'Modernizr',
        'name' => 'js_plg_modernizr',
        'type' => 'true_false',
        'instructions' => 'Link: <a href="https://modernizr.com/" target="_blank">https://modernizr.com/</a><br>Version: 3.5.0',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_5dde4e66a83ff',
        'label' => 'isOnScreen',
        'name' => 'js_plg_isonscreen',
        'type' => 'true_false',
        'instructions' => 'Link: <a href="https://github.com/moagrius/isOnScreen/" target="_blank">https://github.com/moagrius/isOnScreen/</a><br>Version: N/A',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_5ce8e7bd092d7',
        'label' => 'Security',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'left',
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_5ce8e96aaa248',
        'label' => 'Disable XMLRPC',
        'name' => 'developers_disable_xmlrpc',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 1,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_5ce8ea635a737',
        'label' => 'Disable REST API',
        'name' => 'developers_disable_rest_api',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 0,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_5ce8e9a75a736',
        'label' => 'Enable Strict-Transport-Security Headers',
        'name' => 'developers_enable_strict_transport_security_headers',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 1,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_5de9120c8eb2a',
        'label' => 'Disable oEmbed API',
        'name' => 'developers_disable_oembed_api',
        'type' => 'true_false',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'message' => '',
        'default_value' => 1,
        'ui' => 0,
        'ui_on_text' => '',
        'ui_off_text' => '',
      ),
      array(
        'key' => 'field_5d9f23a0d81b4',
        'label' => 'APIs & Keys',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'left',
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_5ce8e848fe642',
        'label' => 'Google Analytics Tracking ID',
        'name' => 'ga_tracking_id',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => 'UA-000000000-0',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5d9f23afd81b5',
        'label' => 'Google Maps API Key',
        'name' => 'google_maps_api_key',
        'type' => 'text',
        'instructions' => 'If API key is entered, Google Maps script will be included with handle \'google-maps\'',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5ddbe27eff35b',
        'label' => 'Google Maps Callback',
        'name' => 'google_maps_callback',
        'type' => 'text',
        'instructions' => 'Leave blank if callback is not needed',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '50',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5d9f23bcd81b6',
        'label' => 'Facebook APP ID',
        'name' => 'facebook_app_id',
        'type' => 'text',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'default_value' => '',
        'placeholder' => '',
        'prepend' => '',
        'append' => '',
        'maxlength' => '',
      ),
      array(
        'key' => 'field_5db2a2fa45089',
        'label' => 'Browser Compability',
        'name' => '',
        'type' => 'tab',
        'instructions' => '',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'placement' => 'left',
        'endpoint' => 0,
      ),
      array(
        'key' => 'field_5db2a3124508a',
        'label' => 'Browser Notice',
        'name' => 'browser_notice',
        'type' => 'checkbox',
        'instructions' => 'Show outdated browser notice for the following browsers',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'ie6' => 'IE6',
          'ie7' => 'IE7',
          'ie8' => 'IE8',
          'ie9' => 'IE9',
          'ie10' => 'IE10',
          'ie11' => 'IE11',
          'edge' => 'Edge'
        ),
        'allow_custom' => 0,
        'default_value' => array(
          0 => 'ie6',
          1 => 'ie7',
          2 => 'ie8',
          3 => 'ie9',
          4 => 'ie10',
        ),
        'layout' => 'horizontal',
        'toggle' => 0,
        'return_format' => 'value',
        'save_custom' => 0,
      ),
      array(
        'key' => 'field_5db2a413d4fb2',
        'label' => 'Browser Class',
        'name' => 'browser_class',
        'type' => 'checkbox',
        'instructions' => 'Add browsers class to html element for following browsers / devices',
        'required' => 0,
        'conditional_logic' => 0,
        'wrapper' => array(
          'width' => '',
          'class' => '',
          'id' => '',
        ),
        'choices' => array(
          'ie10' => 'IE10',
          'ie11' => 'IE11',
          'edge' => 'Edge',
          'chrome' => 'Chrome',
          'firefox' => 'Firefox',
          'opera' => 'Opera',
          'safari' => 'Safari',
          'ios' => 'iOS',
          'android' => 'Android',
          'touch' => 'Touch',
        ),
        'allow_custom' => 0,
        'default_value' => array(
        ),
        'layout' => 'horizontal',
        'toggle' => 0,
        'return_format' => 'value',
        'save_custom' => 0,
      ),
    ),
    'location' => array(
      array(
        array(
          'param' => 'options_page',
          'operator' => '==',
          'value' => 'acf-options-theme-options',
        ),
      ),
    ),
    'menu_order' => 0,
    'position' => 'normal',
    'style' => 'default',
    'label_placement' => 'top',
    'instruction_placement' => 'label',
    'hide_on_screen' => '',
    'active' => true,
    'description' => '',
  ));
  
  endif;
?>