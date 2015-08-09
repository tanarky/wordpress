<?php 
if(have_posts()){
    $i = 0;
    while(have_posts()){
        $i++;
        the_post();
        // <img src="img/img1.jpg">
        if($i % 3 === 1) echo '<div class="row">';
?>
        <div class="col-lg-4">
          <div class="panel panel-default">
            <a class="thumbnail" href="<?php the_permalink(); ?>">
              <?php if(has_post_thumbnail()) the_post_thumbnail('full'); ?>
            </a>
            <div class="panel-body">
              <h2><a href="<?php the_permalink(); ?>">
              <?php the_title(); ?>
              </a></h2>

              <p>
              <?php the_excerpt(); ?>
              </p>
            </div>
          </div>
        </div>

<?php
        if($i % 3 === 0) echo '</div>';
    }
    if($i % 3 != 1) echo '</div>';
}

if(function_exists("pagination")){
   //echo $wp_query->max_num_pages;
   pagination();
}
