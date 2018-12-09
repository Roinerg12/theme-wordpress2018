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
    <nav class="Menu">
      <ul>
        <li><a href="#">Sección 1</a></li>
        <li><a href="#">Sección 2</a></li>
        <li><a href="#">Sección 3</a></li>
        <li><a href="#">Sección 4</a></li>
        <li><a href="#">Sección 5</a></li>
      </ul>
    </nav>
  </header>
  <main class="Main">