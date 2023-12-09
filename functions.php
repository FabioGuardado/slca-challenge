<?php

function slcachallenge_styles(){
  wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css");
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('globals', get_stylesheet_directory_uri() . '/css/globals.css');
  wp_enqueue_script( 'bootstrapjs', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js");
}

add_action( 'wp_enqueue_scripts', 'slcachallenge_styles');

?>