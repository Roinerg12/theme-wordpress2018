<!-- esta pagina es la que llama wordpress para mostrar cada entrada -->
<?php get_header();?>

<?php while(have_posts()): the_post(); ?>
  <main><?php the_content(); ?></main>
  <?php comments_template(); ?>

<?php endwhile; ?>
<?php get_footer();?>