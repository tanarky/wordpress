        <div class="row">
          <div class="col-lg-12">
            <footer id="footer">
              <p class="copy">Copyright&copy; <?php bloginfo('name');?> All Rights Reserved.</p>
            </footer>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- side menu -->
  <nav id="main-nav" class="navigation overflow">
    <h3 style="margin: 10px 10px 10px 10px">PR</h3>
    <img src="//placehold.it/300x250">

    <h3>新着記事</h3>
    <?php get_template_part('newpost');?>
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
