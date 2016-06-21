
    </div> <!-- #container -->

    <div id="footer-wrap">
      <footer>
        <nav id="footer-nav" class="cf">
          <ul>
            <?php wp_nav_menu( array('theme_location' => 'main', 'container' => '', 'items_wrap' => '%3$s' )); ?>
            <?php wp_nav_menu( array('theme_location' => 'top', 'container' => '', 'items_wrap' => '%3$s' )); ?>
          </ul>
        </nav>
        <p>Copyright <?php echo date('Y'); ?>, The Regents of the University of Michigan. All rights reserved. | <a href="http://hilecreative.com" target="_blank">Ann Arbor Web Design</a></p>
      </footer>
    </div>

<?php	wp_footer(); ?>

  <script src="<?php bloginfo('template_directory'); ?>/js/plugins.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/script.js"></script>
  <?php if (is_front_page() && $GLOBALS['animate'] == 'animate'):?>
    <script src="<?php bloginfo('template_directory'); ?>/js/load.js"></script>
  <?php endif; ?>

  <script>
    var _gaq=[['_setAccount','UA-'],['_trackPageview']];
    (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
    g.src=('https:'==location.protocol?'//ssl':'//www')+'.google-analytics.com/ga.js';
    s.parentNode.insertBefore(g,s)}(document,'script'));
  </script>

</body>
</html>
