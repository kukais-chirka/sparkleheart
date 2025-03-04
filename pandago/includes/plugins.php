<?php
/**
 * Add required and optional plugins
 * 
 * @since 1.0.0
 * @since 1.0.9 Added "Autoptimize", "Simple Custom Post Order", "Stealth Login Page", "Smush Image Compression and Optimization", "Custom Post Type UI"
 * 
 * @link http://tgmpluginactivation.com/
 */
function pandago_register_required_plugins() {
  $plugins = array(
    array(
      'name'               => 'Advanced Custom Fields PRO',
      'slug'               => 'advanced-custom-fields-pro',
      'source'             => URL_PLUGINS . '/advanced-custom-fields-pro.zip',
      'required'           => true,
      'version'            => '5.8.7',
      'force_activation'   => false,
      'force_deactivation' => false,
      'external_url'       => '',
      'is_callable'        => '',
    ),
    array(
      'name'               => 'Yoast SEO',
      'slug'               => 'wordpress-seo',
      'source'             => URL_PLUGINS . '/wordpress-seo.zip',
      'required'           => true,
      'version'            => '',
      'force_activation'   => false,
      'force_deactivation' => false,
      'external_url'       => '',
      'is_callable'        => '',
    ),
    array(
      'name'               => 'ACF Content Analysis for Yoast SEO',
      'slug'               => 'acf-content-analysis-for-yoast-seo',
      'source'             => URL_PLUGINS . '/acf-content-analysis-for-yoast-seo.zip',
      'required'           => true,
      'version'            => '',
      'force_activation'   => false,
      'force_deactivation' => false,
      'external_url'       => '',
      'is_callable'        => '',
    ),
    array(
      'name'               => 'Sitepress Multilingual CMS',
      'slug'               => 'sitepress-multilingual-cms',
      'source'             => URL_PLUGINS . '/sitepress-multilingual-cms.4.1.3.zip',
      'required'           => false,
      'version'            => '4.1.3',
      'force_activation'   => false,
      'force_deactivation' => false,
      'external_url'       => '',
      'is_callable'        => '',
    ),
    array(
      'name'               => 'WPML String Translation',
      'slug'               => 'wpml-string-translation',
      'source'             => URL_PLUGINS . '/wpml-string-translation.2.9.1.zip',
      'required'           => false,
      'version'            => '2.9.1',
      'force_activation'   => false,
      'force_deactivation' => false,
      'external_url'       => '',
      'is_callable'        => '',
    ),
    array(
      'name'               => 'Autoptimize',
      'slug'               => 'autoptimize',
      'source'             => URL_PLUGINS . '/autoptimize.2.5.1.zip',
      'required'           => true,
      'version'            => '2.5.1',
      'force_activation'   => false,
      'force_deactivation' => false,
      'external_url'       => '',
      'is_callable'        => '',
    ),
    array(
      'name'               => 'Simple Custom Post Order',
      'slug'               => 'simple-custom-post-order',
      'source'             => URL_PLUGINS . '/simple-custom-post-order.2.4.7.zip',
      'required'           => true,
      'version'            => '2.4.7',
      'force_activation'   => false,
      'force_deactivation' => false,
      'external_url'       => '',
      'is_callable'        => '',
    ),
    array(
      'name'               => 'Stealth Login Page',
      'slug'               => 'stealth-login-page',
      'source'             => URL_PLUGINS . '/stealth-login-page.4.0.0.zip',
      'required'           => true,
      'version'            => '4.0.0',
      'force_activation'   => false,
      'force_deactivation' => false,
      'external_url'       => '',
      'is_callable'        => '',
    ),
    array(
      'name'               => 'Smush Image Compression and Optimization',
      'slug'               => 'wp-smushit',
      'source'             => URL_PLUGINS . '/wp-smushit.3.3.1.zip',
      'required'           => true,
      'version'            => '3.3.1',
      'force_activation'   => false,
      'force_deactivation' => false,
      'external_url'       => '',
      'is_callable'        => '',
    ),
    array(
      'name'               => 'Custom Post Type UI',
      'slug'               => 'custom-post-type-ui',
      'source'             => URL_PLUGINS . '/custom-post-type-ui.1.7.1.zip',
      'required'           => false,
      'version'            => '1.7.1',
      'force_activation'   => false,
      'force_deactivation' => false,
      'external_url'       => '',
      'is_callable'        => '',
    ),
    array(
      'name'               => 'W3 Total Cache',
      'slug'               => 'w3-total-cache',
      'source'             => URL_PLUGINS . '/w3-total-cache.0.12.0.zip',
      'required'           => false,
      'version'            => '0.12.0',
      'force_activation'   => false,
      'force_deactivation' => false,
      'external_url'       => '',
      'is_callable'        => '',
    ),
    array(
      'name'               => 'Asset CleanUp: Page Speed Booster',
      'slug'               => 'wp-asset-clean-up',
      'source'             => URL_PLUGINS . '/wp-asset-clean-up.1.3.5.3.zip',
      'required'           => false,
      'version'            => '1.3.5.3',
      'force_activation'   => false,
      'force_deactivation' => false,
      'external_url'       => '',
      'is_callable'        => '',
    ),
    array(
      'name'               => 'WebP Express',
      'slug'               => 'webp-express',
      'source'             => URL_PLUGINS . '/webp-express.0.17.2.zip',
      'required'           => false,
      'version'            => '0.17.2',
      'force_activation'   => false,
      'force_deactivation' => false,
      'external_url'       => '',
      'is_callable'        => '',
    ),
  );
  tgmpa( $plugins, $config );
}
add_action( 'tgmpa_register', 'pandago_register_required_plugins' );
?>
