<article class="Content">
  <h1>Creación de temas</h1>
  <h2>Contenido</h2>
  <?php if(have_posts()): while (have_posts()): the_post();?>
    <article>
    <!-- the_title o get_title mostra el titulo -->
      <h2><a href=""></a><?php the_title(); ?></h2>
      <!-- get_permalink para mostrar en enlace del post -->
      <small><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></small>
      <?php  ?>
      <!-- para mostar el extrato -->
      <?php the_excerpt() ?>
      <!-- mostrar hora y fecha -->
      <p>
        <?php the_time(); ?>
        <?php the_time(get_option('date_format')); ?>
      
      </p>
      <!-- mostrar autor y enlace al autor -->
      <p>
        <?php the_author() ?>
        <?php the_author_posts_link() ?>
      </p>
    </article>
    <hr>
  <?php endwhile; else: ?>
    <p>El contenido solicitado no existe</p>
  <?php endif; ?>
</article>
<section class="Pagination">
<?php //previous_post_link(); ?>
<?php //next_post_link(); ?>
<?php echo paginate_links(); ?>
</section>