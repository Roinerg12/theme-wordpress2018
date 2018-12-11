<!DOCTYPE html>
<!-- language_attributes() metodo wp para que cargue los idionas -->
<html <?php language_attributes();?>> 
<head>
<!-- bloginfo contiene varias metodos con información del sitio -->
  <meta charset= "<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <!-- wp_title muestra el title del sitio y su posición -->
  <title><?php wp_title('|', true, 'right'); ?> <?php bloginfo('name'); ?> </title>
  <!-- Instalación obligatoria para la carga de hojas de estilos y scripts -->
  <?php wp_head(); ?>
</head>
<body>
  <header class="Header">
    <div class="Logo"><a href="<?php echo esc_url(home_url("/")); ?>">Logo</a></div>
    <!-- condicion para verificar si el usuario a creado un menú -->
    <?php if(has_nav_menu('main_menu')):
     // si ha creado el menú lo imprime
     wp_nav_menu(array(
      'theme_location' => 'main_menu',
      'container' => 'nav',
      'container_class' => 'Menu'
     ));
    else: ?>
    <!-- sino ha creado el menú imprime todas las entradas por defecto -->
    <nav class="Menu">
      <ul>
        <?php wp_list_pages('title_li') ?>
      </ul>
    </nav>
    <?php endif; ?>
  </header>
  <main class="Main">