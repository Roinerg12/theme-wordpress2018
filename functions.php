<?php 
/**
 * My Awesome Wordpress Theme functions and definitions
 * 
 * @link https://developer.wordpress.org/themes/basic/theme-functions
 * 
 * @package WordPress
 * @subpackage mawt
 * @since 1.0.0
 * @version 1.3.1
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
    add_theme_support('html5', array(
      'comment-list',
      'comment-form',
      'search-form',
      'gallery',
      'caption'
    ));
  }
endif;
add_action('after_setup_theme', 'mawt_setup');
// funcion para habilitar la opción de menú
if(!function_exists('mawt_menus')):
  function mawt_menus(){
    // array que contiene los menú que sera activado
    register_nav_menus(array(
      'main_menu' => __('Menú Principal', 'mawt'),
      'social_menu' =>__('Menú Redes Sociales', 'mawt')
    ));
  }
endif;
add_action('init', 'mawt_menus');

// funcion para habilitar la opción de widget
if(!function_exists('mawt_register_sidebars')):
  function mawt_register_sidebars(){
    // array que contiene los menú que sera activado
    register_sidebar(array(
      'name' => __('Sidebar Principal', 'mawt'),
      'id' => 'main_sidebar',
      'description' => __('Este es el sidebar princial'),
      'before_widget' => '<article id="%1$s" class="Widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
    register_sidebar(array(
      'name' => __('Sidebar Footer', 'mawt'),
      'id' => 'footer_sidebar',
      'description' => __('Este es el sidebar del footer'),
      'before_widget' => '<article id="%1$s" class="Widget %2$s">',
      'after_widget' => '</article>',
      'before_title' => '<h3>',
      'after_title' => '</h3>'
    ));
  }
endif;
add_action('widgets_init', 'mawt_register_sidebars');