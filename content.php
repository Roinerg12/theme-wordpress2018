<article class="Content">
  <?php if(have_posts()): while (have_posts()): the_post();?>
    <article>
      <?php the_post_thumbnail() ?>
    <!-- the_title o get_title mostra el titulo -->
      <h2><a href="<?php echo get_permalink() ?>"><?php the_title(); ?></a></h2>
      <!-- get_permalink para mostrar en enlace del post -->
      <?php  ?>
      <!-- para mostar el extrato -->
      <?php the_excerpt() ?>
      <!-- mostrar hora y fecha -->
      <p><?php the_category(',') ?></p>
      <p><?php the_tags() ?></p>
      <p><?php the_time(get_option('date_format')); ?></p>
      <!-- mostrar autor y enlace al autor -->
      <p><?php the_author_posts_link() ?></p>
    </article>
    <hr>
  <?php endwhile; else: ?>
    <p>El contenido solicitado no existe</p>
  <?php endif; ?>
</article>
<section class="Pagination Other">
<?php //previous_post_link(); ?>
<?php //next_post_link(); ?>
<?php echo paginate_links(); ?>
</section>