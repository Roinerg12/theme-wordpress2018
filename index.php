<?php 
  //get_header() cargar contenido del header
  get_header();
  //condicional tag
  if(is_home()){
    echo '<mark> Estoy en el homhe</mark>';
  } else if (is_category()){
    echo '<mark> Estoy en una categoria</mark>';
  } else if (is_tag()){
    echo '<mark> Estoy en una etiqueta</mark>';
  } else if (is_page()){
    echo '<mark> Estoy en una pagina</mark>';
  } else if (is_single()){
    echo '<mark> Estoy en una entrada</mark>';
  } else if (is_search()){
    echo '<mark> Estoy en una busqueda</mark>';
  } else if (is_author()){
    echo '<mark> Estoy en una pagina de author</mark>';
  } else if (is_404()){
    echo '<mark> Estoy en una error 404</mark>';
  } 
  // get_template_part() para cargar contenido de personalizado en este caso del de content 
  get_template_part('content');
  //get_sidebar() cargar contenido del sidebar
  get_sidebar();
  //get_footer() cargar contenido del footer
  get_footer();

