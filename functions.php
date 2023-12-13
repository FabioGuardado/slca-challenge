<?php

function slcachallenge_styles(){
  wp_enqueue_style('normalize', get_stylesheet_directory_uri() . '/css/normalize.css');
  wp_enqueue_style('bootstrap', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css");
  wp_enqueue_style('style', get_stylesheet_uri());
  wp_enqueue_style('globals', get_stylesheet_directory_uri() . '/css/globals.css');
  wp_enqueue_style('navbar', get_stylesheet_directory_uri() . '/css/navbar.css');
  wp_enqueue_style('header-section', get_stylesheet_directory_uri() . '/css/header-section.css');
  wp_enqueue_style('about-section', get_stylesheet_directory_uri() . '/css/about-section.css');
  wp_enqueue_style('values-cards-list', get_stylesheet_directory_uri() . '/css/values-cards-list.css');
  wp_enqueue_style('slides', get_stylesheet_directory_uri() . '/css/slides.css');
  wp_enqueue_style('testimonials', get_stylesheet_directory_uri() . '/css/testimonials.css');
  wp_enqueue_style('footer', get_stylesheet_directory_uri() . '/css/footer.css');
  wp_enqueue_style('cta-section', get_stylesheet_directory_uri() . '/css/cta-section.css');
  wp_enqueue_script( 'bootstrapjs', "https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js",'','',true);
  wp_enqueue_script('header-video', get_stylesheet_directory_uri() . '/assets/js/header-video.js','','',true);
  wp_enqueue_script('value-card', get_stylesheet_directory_uri() . '/assets/js/value-card.js','','',true);
}

add_action( 'wp_enqueue_scripts', 'slcachallenge_styles');

?>