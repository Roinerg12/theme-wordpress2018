<!-- esta pagina es la que llama wordpress para mostrar cada entrada -->
<?php 
  get_header();

// <h1> Pagina no disponible</h1>
// <a href=" <?php echo esc_url(home_url('/')); "> Volver al Home</a>
  echo '<p class="Error404">Error 404: NOT FOUND</p>' ;
  get_sidebar();
  get_footer();