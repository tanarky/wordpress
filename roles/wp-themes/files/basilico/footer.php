        <footer id="footer">
          <p class="copy">Copyright&copy;
            <?php bloginfo('name') . ','. the_date('Y');?>
            All Rights Reserved.
          </p>
        </footer>
      </section>
  </div>

  <!-- side menu -->
  <nav id="main-nav" class="navigation overflow">
    <?php wp_nav_menu(array('theme_location' => 'navbar'));?>
  </nav>
  <!-- /side_menu -->


<script src="http://code.jquery.com/jquery-2.0.0.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/bamboo.js"></script>
<script>
var site = new Bamboo({
    menuWidth: 300,
});
</script>
  </body>
</html>
