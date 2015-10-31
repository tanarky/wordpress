<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta content="IE=Edge,chrome=1" http-equiv="X-UA-Compatible" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />
    <title><?php echo bloginfo('name');?></title>

    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>" type="text/css" media="screen">
    <style type="text/css"><?php include('modules/custom_style.php');?></style>
    <script src="<?php echo get_template_directory_uri(); ?>/js/jquery-1.11.3.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>
    <!--[if lt IE 9]>
        <script src="//cdnjs.cloudflare.com/ajax/libs/html5shiv/3.6.1/html5shiv.js"></script>
    <![endif]-->
  </head>
  <body>
    <?php include('modules/global_header.php'); ?>
    <div class="container">
      <div class="row">
        <div class="col-md-8 main-column">
          <?php include('modules/article_list.php'); ?>
        </div>
        <div class="col-md-4 sub-column">
          <div class="ad mgb">
            <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(1)){} ?>
          </div>
          <hr>
          <?php include('modules/latest_articles.php'); ?>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-default navbar-static-bottom">
      <div class="container">
        <footer>
          <hr />
          <div class="row">
            <div class="col-sm-4 mgb">
              <h3>カテゴリ</h3>
              <ul><li><a href="/categories/1">家電</a><ul><li><a href="/categories/5">TV</a><ul><li><a href="/categories/7">Sony</a></li><li><a href="/categories/8">Panasonic</a></li></ul></li><li><a href="/categories/6">冷蔵庫</a></li></ul></li><li><a href="/categories/2">ファッション</a><ul><li><a href="/categories/3">女性</a></li><li><a href="/categories/4">男性</a></li></ul></li></ul>
            </div>
            <div class="col-sm-4 mgb">
              <?php include('modules/latest_articles.php'); ?>
            </div>
            <div class="col-sm-4 mgb">
              <h3>ソーシャル</h3>
              <a class="twitter-timeline" data-widget-id="649040846575112192" href="https://twitter.com/GREE_news_jp">@GREE_news_jpさんのツイート</a>
              <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
            </div>
          </div>
          <hr />
          <div class="row">
            <div class="col-sm-12">
              <p>
                &copy; Company 2015
              </p>
            </div>
          </div>
        </footer>
      </div>
    </nav>
  </body>
</html>

<?php 
//get_header();
//get_template_part('category_tab');
//get_template_part('itiran');
//get_footer();
