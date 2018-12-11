<!-- para mostrar plantillas mostrar las paginas sin sidebar, el comentario de Template name es necesario -->
<?php /** Template name: Página de ancho completo */; ?>
<!-- esta pagina es la que llama wordpress para mostrar cada entrada -->
<?php get_header();?>

<?php while(have_posts()): the_post(); ?>
  <section> 
    <?php the_title();?>
    <?php the_content(); ?>
  </section>
 
<?php endwhile; ?>
<?php get_footer();?>