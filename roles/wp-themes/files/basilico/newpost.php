<?php
$st_query = new WP_Query(array('posts_per_page' => 5));
if($st_query->have_posts()){
    echo '<ol>';
    while($st_query->have_posts()){
        $st_query->the_post();
        echo '<li><div class="media"><div class="media-left"><a href="';
        the_permalink();
        echo '">';
        if(has_post_thumbnail()){
            echo the_post_thumbnail('thumb100');
        }
        echo '</a></div><div class="media-body">';
        echo '<a href="#">';
        echo '<h4 class="media-heading">';
        echo the_title();
        echo '</h4></a>';
        the_excerpt();
        echo '</div></div></li>';
    }
    echo '</ol>';
}
?>
<?php wp_reset_postdata(); ?>

