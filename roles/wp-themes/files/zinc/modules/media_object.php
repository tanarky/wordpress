<div class="panel panel-default">
  <a class="thumbnail" href="<?php the_permalink();?>">
    <?php if(has_post_thumbnail()) the_post_thumbnail('full'); ?>
  </a>
  <div class="panel-body">
    <h2><a href="<?php the_permalink();?>"><?php the_title(); ?></a></h2>
  </div>
</div>
