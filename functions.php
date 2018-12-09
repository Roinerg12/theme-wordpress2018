<?php 
/**
 * My Awesome Wordpress Theme functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basic/theme-functions
 * 
 * @package WordPress
 * @subpackage mawt
 * @since 1.0.0
 * @version 1.1.0
 */
// si el scripts no exite crea el scripts
if(!function_exists('mawt_scripts')) :
  // función para cargar los script
  function mawt_scripts(){
    // agraga los estilos de las fuentes
    wp_register_style('google-fonts', 'https://fonts.googleapis.com/css?family=Raleway:400,700',array(),'1.0.0','all');
    // agregar los estilos de Style.css con get_stylesheet_uri()
    wp_register_style('style', get_stylesheet_uri(), array('google-fonts'), '1.0.0', 'all'); 
    // llamamos los estilos cargados previamente
    wp_enqueue_style('style');
    wp_enqueue_style('google-fonts');
    // para los .js no nay un metodo de cargar para eso usamos get_template_directory_uri que nos devuelve la dirección de tema
    wp_register_script('scripts', get_template_directory_uri() . '/script.js', array('jquery'),'1.0.0', true);
    
    // llamamos los script cargados previamente
    wp_enqueue_script('jquery');
    wp_enqueue_script('scripts');
  }
endif;

// llamamos a la función que contiene la carga de los archivos
add_action('wp_enqueue_scripts', 'mawt_scripts');

if(! function_exists('mawt_setup')):
  function  mawt_setup(){
    // Mostrar imagen destacada
    add_theme_support('post-thumbnails');
  }
endif;
add_action('after_Setup_theme', 'mawt_setup');