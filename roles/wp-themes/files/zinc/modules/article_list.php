<?php 
if(have_posts()){
    $i = 0;
    $one_line_article_num = 2;
    while(have_posts()){
        $i++;
        the_post();
        if($i % $one_line_article_num === 1) echo '<div class="row">';
        echo '<div class="col-sm-6">';
        include('media_object.php');
        echo '</div>';

        if($i % $one_line_article_num === 0) echo '</div>';
    }
    if($i % $one_line_article_num !== 0) echo '</div>';
}

if(function_exists("pagination")){
   pagination();
}
