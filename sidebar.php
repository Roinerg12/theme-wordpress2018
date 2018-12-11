<aside class="Sidebar"> 
  <?php 
    // activar sidebar dinamico
    if(is_active_sidebar('main_sidebar')):
    dynamic_sidebar('main_sidebar');
  else: ?>
    <p>no hay widget</p>
  <?php endif; ?>
</aside>