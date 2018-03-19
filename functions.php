<?php

function liceum_files() {
  wp_enqueue_style('liceum_main_styles', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'liceum_files');
