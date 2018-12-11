<!-- esta pagina es la que llama wordpress para mostrar cada entrada -->
<?php get_header();?>

<h1> Pagina no disponible</h1>
<a href=" <?php echo esc_url(home_url('/')); ?>"> Volver al Home</a>
<?php get_footer();?>