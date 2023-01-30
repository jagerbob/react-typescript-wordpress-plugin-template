<?php

/*
  Plugin Name: React TS Plugin Sample
  Description: A sample plugin that contains all the boilerplate required to make a React Typescript Wordpress plugin. 
  Version: 1.0
  Author: Brad & Jagerbob
  Author URI: https://github.com/jagerbob/react-ts-wp-plugin-sample
*/

if( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

class ReactTSBoilerplate {
  function __construct() {
    add_action('init', array($this, 'onInit'));
  }

  function onInit() {
    wp_register_script('custom-block-name-editor-script', plugin_dir_url(__FILE__) . 'build/index.tsx.js', array('wp-blocks', 'wp-element', 'wp-editor'));
    wp_register_style('custom-block-name-editor-style', plugin_dir_url(__FILE__) . 'build/index.tsx.css');
    
    register_block_type('your-ns/custom-block-name', array(
      'render_callback' => array($this, 'renderCallback'),
      'editor_script' => 'custom-block-name-editor-script',
      'editor_style' => 'custom-block-name-editor-style'
    ));
  }

  function renderCallback($attributes) {
    if (!is_admin()) {
      wp_enqueue_script('custom-block-name-frontend-script', plugin_dir_url(__FILE__) . 'build/frontend.tsx.js', array('wp-element'), "0.0.1", true);
      wp_enqueue_style('custom-block-name-fronted-style', plugin_dir_url(__FILE__) . 'build/frontend.tsx.css');
    }

    ob_start(); ?>
    <div class="boilerplate-update-me"><pre style="display: none;"><?php echo wp_json_encode($attributes) ?></pre></div>
    <?php return ob_get_clean();
    
  }
}

$reactTSBoilerplate = new ReactTSBoilerplate();