<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button class="navbar-toggle" data-target=".navbar-responsive-collapse" data-toggle="collapse" type="button">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
      </button>
      <a href="/">
        <img alt="<?php bloginfo('name');?>" src="<?php echo esc_url(get_option(THEME_NAME. '_logo', '//placehold.it/200x50')); ?>" />
      </a>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li>
          <form class="navbar-form" role="search">
            <div class="input-group">
              <input class="form-control" placeholder="Search" type="text">
                <div class="input-group-btn">
                  <button class="btn btn-default" type="submit"><span class="glyphicon glyphicon-search"></span></button>
                </div>
              </input>
            </div>
          </form>
        </li>
      </ul>
    </div>
    <div class="navbar-collapse collapse navbar-responsive-collapse link-menu">

<?php
$header_navi = wp_nav_menu(
    array(
        'container'  => '',
        'theme_location' => 'global_header',
        'menu_class' => 'nav nav-pills navbar-left nav-cats',
        'items_wrap' => '<ul class="%2$s">%3$s</ul>',
        'echo'       => false
    )
);
$header_navi = preg_replace('/li id=".*?"/', 'li', $header_navi);
$header_navi = preg_replace('/ current_page_item/', '', $header_navi);
$header_navi = preg_replace('/ current-menu-item/', ' active', $header_navi);
$header_navi = preg_replace('/ menu-item[^\s"]*/', '', $header_navi);
$header_navi = preg_replace('/menu-item\s?/', '', $header_navi);
echo $header_navi;
?>
    </div>
  </div>
</nav>