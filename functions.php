<?php 

add_action('wp_enqueue_scripts','zza_add_assets');


function zza_add_assets(){

  wp_register_style('zza-main-style',get_template_directory_uri( ).'/assets/css/main.css');
  wp_enqueue_style('zza-main-style');

  wp_register_script( 'zza-main-script',get_template_directory_uri().'/assets/js/main.js',['jquery'],false,true);
  wp_enqueue_script( 'zza-main-script' );

}

add_action('after_setup_theme' , 'active_module_fun_aftset');

function active_module_fun_aftset(){

  add_theme_support('post-thumbnails');
  add_theme_support( 'title-tag' );
  add_theme_support( 'post-formats',['galley','video','chat','audio'] );
}