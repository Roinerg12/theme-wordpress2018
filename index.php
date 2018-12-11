<?php 
  //get_header() cargar contenido del header
  get_header();
  // get_template_part() para cargar contenido de personalizado en este caso del de content 
  get_template_part('content');
  //get_sidebar() cargar contenido del sidebar
  get_sidebar();
  //get_footer() cargar contenido del footer
  get_footer();