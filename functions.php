<?php

function scripts() {
  // Register and enqueue style
  wp_register_style('style', get_template_directory_uri() . '/dist/app.css', [], '1.0.0', 'all');
  wp_enqueue_style('style');

  // Enqueue jQuery
  wp_enqueue_script('jquery');

  // Register and enqueue script
  wp_register_script('app', get_template_directory_uri() . '/dist/app.js', ['jquery'], '1.0.0', true);
  wp_enqueue_script('app');
}

add_action('wp_enqueue_scripts', 'scripts');

