<?php
function add_css()
{
   wp_register_style('main', get_template_directory_uri() . '/assets/css/style.css', false,'1.1','all');
   wp_enqueue_style( 'main');

   wp_register_style('bootstrap', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false,'1.1','all');
   wp_enqueue_style( 'bootstrap');

   wp_register_style('owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css', false,'1.1','all');
   wp_enqueue_style( 'owl-carousel');

   wp_register_style('owl-carousel-theme', get_template_directory_uri() . '/assets/css/owl.theme.css', false,'1.1','all');
   wp_enqueue_style( 'owl-carousel-theme');
}
add_action('wp_enqueue_scripts', 'add_css');


function add_script()
{
   wp_register_script('js-script', 'https://code.jquery.com/jquery-1.10.2.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'js-script');
  
   wp_register_script('carousel', get_template_directory_uri() . '/assets/js/owl.carousel.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'carousel');

   wp_register_script('bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
   wp_enqueue_script( 'bootstrap');
}
add_action('wp_enqueue_scripts', 'add_script');

add_theme_support( 'menus' );
?>

