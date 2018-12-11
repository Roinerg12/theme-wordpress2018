</main>
  <footer class="Footer">
  <?php if(has_nav_menu('social_menu')):
     // si ha creado el menú lo imprime
     wp_nav_menu(array(
      'theme_location' => 'social_menu',
      'container' => 'nav',
      'container_class' => 'SocialMedia'
     ));
    endif; ?>
    <div><small>&copy; <?php echo date('Y') ?> por @roinerg12</small></div>
  </footer>
  <!-- De instalación obligatoria al final del body, cargar de archivo wordpress -->
  <?php wp_footer(); ?>
</body>
</html>