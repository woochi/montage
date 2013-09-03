<footer id="main-footer">
  <div class="container clear">
  <p id="copy">
    <a href="<?php echo home_url(); ?>">Montaasi</a><br>
    <a href="mailto:montaasi@list.ayy.fi">montaasi@list.ayy.fi</a><br>
    <a target="_blank" href="https://www.google.com/maps?q=Otakaari+20a,+Espoo,+Finland&hl=en&ll=60.187046,24.833844&spn=0.007489,0.022724&sll=60.187046,24.833844&sspn=0.007489,0.022724&hnear=Otakaari+20,+02150+Espoo,+Finland&t=m&z=16">Otakaari 20 A</a><br>
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
</section>
<script src="<?php bloginfo("template_directory"); ?>/javascripts/theme.js"></script>
<?php wp_footer(); ?>
</body>
</html>