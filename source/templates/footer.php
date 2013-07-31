</section>
<footer id="main-footer">
  <div class="container">
  <a id="copy" href="<?php echo home_url(); ?>">Elokuvakerho Montaasi Ry</a>
  <nav id="footer-nav">
    <?php wp_nav_menu(array(
      'menu' => 'footer-menu',
      'container' => '',
      'items_wrap' => '<ul class="nav-list">%3$s</ul>'
    )); ?>
  </nav>
  </div>
</footer><!--end footer-->
<?php wp_footer(); ?>
</body>
</html>