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
          <h1 class="entry-title">Page not found</h1>
          <p>お探しのページはありません。</p>
          <hr>
          <?php include('modules/latest_articles.php'); ?>
        </div>
        <div class="col-md-4 sub-column">
          <div class="ad mgb">
            <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(1)){} ?>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-default navbar-static-bottom">
      <div class="container">
        <footer>
          <hr />
          <div class="row">
            <div class="col-sm-4 mgb">
              <?php include('modules/footer_tags.php'); ?>
            </div>
            <div class="col-sm-4 mgb">
              <?php include('modules/latest_articles.php'); ?>
            </div>
            <div class="col-sm-4 mgb">
              <?php if(function_exists('dynamic_sidebar') && dynamic_sidebar(2)){} ?>
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

