</section>
<footer id="main-footer">
  <div class="container clear">
  <p id="copy">
    <a href="<?php echo home_url(); ?>">Elokuvakerho Montaasi Ry</a><br>
    montaasi(at)list.ayy.fi<br>
    <a href="http://goo.gl/f59e7H">Otakaari 20 A</a><br>
    PL 69 02151 Espoo
  </p>
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