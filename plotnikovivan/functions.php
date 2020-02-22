<?php

add_action( 'wp_enqueue_scripts', 'style_theme');

function style_theme() {
    wp_enqueue_style('style', get_stylesheet_uri());
}


function font_awesome() {
    if (!is_admin()) {
      wp_register_style('font-awesome', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css');
      wp_enqueue_style('font-awesome');
    }
  }
  add_action('wp_enqueue_scripts', 'font_awesome');