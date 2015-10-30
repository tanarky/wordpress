<h3>新着記事</h3>
<div class="mgb">
<?php
$st_query = new WP_Query(array('posts_per_page' => 5));
if($st_query->have_posts()){
    echo '<ol class="rnk">';
    $i = 1;
    while($st_query->have_posts()){
        $st_query->the_post();
        echo '<li><a href="';
        the_permalink();
        echo '">';
        echo '<div class="media"><div class="media-left rnk-num">';
        echo $i;
        echo '</div><div class="media-left">';
        if(has_post_thumbnail()){
            echo the_post_thumbnail('thumb100');
        }
        else {
            echo '<img src="//placehold.it/100x100" />';
        }
        echo '</div>';
        echo '<div class="media-body"><div class="desc">';
        echo the_title();
        echo '</div></div>';

        echo '</div></a></li>';

        $i++;
    }
    echo '</ol>';
}
?>
</div>
